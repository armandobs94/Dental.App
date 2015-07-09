package integradora.dental.v2;

import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.os.Vibrator;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class VistaContacto extends Activity {
	
	EditText asunto;
	EditText comentario;
	Button enviar;
	String destino = "a20120872@utem.edu.mx";
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.layout_contacto);
	
		asunto = (EditText)findViewById(R.id.edit_asunto_c);
		comentario = (EditText)findViewById(R.id.edit_comentario_c);
		enviar = (Button)findViewById(R.id.btn_enviar_c);
		
		enviar.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View arg0) {
				
				
				String asunt = asunto.getText().toString();
				String com = comentario.getText().toString();
				
				//Toast.makeText(getApplicationContext(), name+asunt+com, Toast.LENGTH_SHORT).show();
				if(asunt.equals("") || com.equals("")){
					Toast.makeText(getApplicationContext(), "Todos los campos deben de contener al menos un texto.", Toast.LENGTH_SHORT).show();
					Vibrator vibrator =(Vibrator)getSystemService(Context.VIBRATOR_SERVICE);
				    vibrator.vibrate(200);
				}else{
					//se enviar el email
					enviarEmail(destino, asunt, com);
				}
			}
		});
	}
	
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }
    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()) {
       
        case R.id.item1:
        //Contacto
            Toast.makeText(getApplicationContext(), "Espere...",Toast.LENGTH_SHORT).show();
            	Intent i = new Intent(getApplicationContext(), VistaContacto.class);
            	startActivity(i); 
            	
            break;
            
        case R.id.item2:
           //Pagos
            break;
        case R.id.item3:
        	//Salir
        	finish();
        	break;
        }
	
        return true;
    }
    
	public void enviarEmail(String des, String as, String tex){
		
		Intent i = new Intent(android.content.Intent.ACTION_SEND);
		i.setType("text/plain");
		i.putExtra(android.content.Intent.EXTRA_EMAIL, new String[]{des});
		i.putExtra(android.content.Intent.EXTRA_SUBJECT, as);
		i.putExtra(android.content.Intent.EXTRA_TEXT, tex);
		try {
			startActivity(Intent.createChooser(i, "Enviando correo"));
		} catch (Exception e) {
			e.printStackTrace(); 
		}
	}
}
