        <div class="row justify-content-center">
           
          <x-dashboard.process-card route="{{ route('canciones.index') }}" bgColor="primary"  icon="wrench" text="Crea Acordes"/>
          <x-dashboard.process-card route="{{ route('canciones.index') }}" bgColor="danger"  icon="trash" text="Elimina tus Acordes"/>
          <x-dashboard.process-card route="{{ route('canciones.index') }}" bgColor="success" icon="edit"  text="Modifica tus Acordes"/>
         
        </div>