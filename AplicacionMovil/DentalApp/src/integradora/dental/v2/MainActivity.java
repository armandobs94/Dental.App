package integradora.dental.v2;

import java.util.ArrayList;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.os.SystemClock;
import android.os.Vibrator;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends Activity {
	
	/**
	 *@autor Armando Blanco 
	 *@version 1.5
	 */
	/*Elementos a usar*/
	EditText et_usuario;
	EditText et_password;
	Button b_login;
	Httppostaux post;
	String IP_Server="192.168.1.66";//IP DE NUESTRO SERVER
	String URL_connect="http://"+IP_Server+"/DentalApp/log_movil/acces.php";//ruta en donde estan nuestros archivos
	boolean result_back;
    private ProgressDialog pDialog;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		post = new Httppostaux();
		et_usuario = (EditText)findViewById(R.id.edit_usuario);
		et_password = (EditText)findViewById(R.id.edit_contra);
		b_login = (Button)findViewById(R.id.btn_login);
		
		b_login.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View view) {
				String usuario = et_usuario.getText().toString(); 
				String passw = et_password.getText().toString();
				
				if(usuario.equals("") || passw.equals("")){
					error("Favor de llenar todos los campos");
				}else{
					new asynclogin().execute(usuario,passw);
				}
			}	
		});
		
	}//Termina OnCreate
	
	
	public void error(String msg){
		Toast.makeText(getApplicationContext(), msg, Toast.LENGTH_SHORT).show();
		Vibrator vibrator =(Vibrator)getSystemService(Context.VIBRATOR_SERVICE);
	    vibrator.vibrate(200);
	}
	
	class asynclogin extends AsyncTask <String, String, String> {
   	   	
		String user,pass;
        
   	   	protected void onPreExecute() {
        	//para el progress dialog
            pDialog = new ProgressDialog(MainActivity.this);
            pDialog.setMessage("Validando datos....");
            pDialog.setIndeterminate(false);
            pDialog.setCancelable(false);
            pDialog.show();
        }
 
		protected String doInBackground(String... params) {
			//obtnemos usr y pass
			user=params[0];
			pass=params[1];
            //enviamos y recibimos y analizamos los datos en segundo plano.
    		if (loginstatus(user,pass)==true){    		    		
    			return "ok"; //login valido
    		}else{    		
    			return "err"; //login invalido     	          	  
    		}
		}
       
		/*Una vez terminado doInBackground segun lo que halla ocurrido 
		pasamos a la sig. activity
		o mostramos error*/
        protected void onPostExecute(String result) {
           pDialog.dismiss();//ocultamos progess dialog.
           Log.e("onPostExecute=",""+result);
           if (result.equals("ok")){
        	   
				Intent i = new Intent(getApplicationContext(), PrincipallView.class);
				i.putExtra("user", user);
				startActivity(i);
				 
            }else{
            	error("Usuario y/o contraseña incorrectos");
            }
        }	
	}
	
	public boolean loginstatus(String username ,String password ) {
		int logstatus=-1;
		ArrayList<NameValuePair> postparameters2send= new ArrayList<NameValuePair>();
		postparameters2send.add(new BasicNameValuePair("usuario",username));
		postparameters2send.add(new BasicNameValuePair("password",password));
		JSONArray jdata=post.getserverdata(postparameters2send, URL_connect);
		
		SystemClock.sleep(950);
		
		if (jdata!=null && jdata.length() > 0){
			JSONObject json_data; //creamos un objeto JSON
			try {
				json_data = jdata.getJSONObject(0); //leemos el primer segmento en nuestro caso el unico
				 logstatus=json_data.getInt("logstatus");//accedemos al valor 
				 Log.e("loginstatus","logstatus= "+logstatus);//muestro por log que obtuvimos
			} catch (JSONException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			//validamos el valor obtenido
   		 		if (logstatus==0){// [{"logstatus":"0"}] 
   		 			Log.e("loginstatus ", "invalido");
   		 			return false;
   		 		}
   		 		else{// [{"logstatus":"1"}]
   		 			Log.e("loginstatus ", "valido");
   		 			return true;
   		 		}
		}else{
			Log.e("JSON  ", "ERROR");
    		return false;
		}
	}
	
}//Termina MainActivity
