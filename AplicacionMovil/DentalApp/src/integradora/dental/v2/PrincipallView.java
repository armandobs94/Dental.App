package integradora.dental.v2;

import android.app.Activity;
import android.os.Bundle;
import android.view.KeyEvent;
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
          Toast.makeText(getApplicationContext(), user, Toast.LENGTH_SHORT).show();                      
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
}
