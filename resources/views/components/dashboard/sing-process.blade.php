        <div class="row justify-content-center">
           
          <x-dashboard.process-card route="{{ route('canciones.create') }}" bgColor="primary"  icon="wrench" text="Crea Canciones"/>
          <x-dashboard.process-card route="{{ route('songDelete.index') }}" bgColor="danger"  icon="trash" text="Elimina tus Canciones"/>
          <x-dashboard.process-card route="{{ route('songEdits.index') }}" bgColor="success" icon="edit"  text="Modifica tus Canciones"/>
         
        </div>