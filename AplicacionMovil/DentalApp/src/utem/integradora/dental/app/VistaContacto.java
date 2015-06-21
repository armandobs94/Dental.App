package utem.integradora.dental.app;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;

public class VistaContacto extends Activity {
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.layout_contacto);
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
        /**
        case R.id.item1:
            Toast.makeText(this, "Espere...",
                    Toast.LENGTH_SHORT).show();
            	Intent i = new Intent(getApplicationContext(), VistaContacto.class);
            	startActivity(i); 
            break;
            */
        case R.id.item2:
            finish();
        }
        return true;
    }
}
