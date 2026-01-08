        <div class="row justify-content-center">
           
          <x-dashboard.process-card route="{{ route('admin.posts') }}" bgColor="primary"  icon="list" text="Gestiona Publicaciones"/>
          <x-dashboard.process-card route="{{ route('admin.users') }}" bgColor="secondary"  icon="user" text="Gestiona Usuarios"/>
          <x-dashboard.process-card route="{{ route('admin.comments') }}" bgColor="success" icon="comment"  text="Gestiona Comentarios"/>
         
        </div>