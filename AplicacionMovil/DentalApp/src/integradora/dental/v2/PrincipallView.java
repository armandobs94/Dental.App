package integradora.dental.v2;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.KeyEvent;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.Toast;


public class PrincipallView extends Activity{
	String user;
	
	 public void onCreate(Bundle savedInstanceState) {
		 
	       super.onCreate(savedInstanceState);
	       setContentView(R.layout.citas_main);         
            
            Bundle extras = getIntent().getExtras();
            //Obtenemos datos enviados en el intent.
            if (extras != null) {
         	   user  = extras.getString("user");//usuario
            }else{
         	   user="error";
         	   }
          //cambiamos texto al nombre del usuario logueado   	 
          Toast.makeText(getApplicationContext(), "Bienvenido: "+user, Toast.LENGTH_LONG).show();                      
	 }
	 
//Definimos que para cuando se presione la tecla BACK no volvamos para atras  	 
	 @Override
	 public boolean onKeyDown(int keyCode, KeyEvent event)  {
	     if (keyCode == KeyEvent.KEYCODE_BACK && event.getRepeatCount() == 0) {
	         // no hacemos nada.
	         return true;
	     }

	     return super.onKeyDown(keyCode, event);
	 }
	 
		@Override
	    public boolean onCreateOptionsMenu(Menu menu) {
	        // Inflate the menu; this adds items to the action bar if it is present.
	        getMenuInflater().inflate(R.menu.main, menu);
	        return true;
	    }

		 @Override
		    public boolean onOptionsItemSelected(MenuItem item) {
		        switch (item.getItemId()) {
		       
		        case R.id.item1:
		        //Contacto
		            Toast.makeText(this, "Espere...",
		                    Toast.LENGTH_SHORT).show();
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
}
