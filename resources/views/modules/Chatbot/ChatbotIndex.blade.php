@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/chatbot.css')}}">

<div class=" d-flex mt-9 justify-content-center">
    <section class="chat bg-white">
        <header class="text-center">
            <h1 class=" mt-1 "> CHATBOT</h1>

        </header>
        <main id="chatSection">  
            <span class="chatbot-message">
                <h6 class="message-remitent">Bot</h6>
                <p class="message">Pregunta lo que gustes</p>

            </span>
            {{-- <span class="chatbot-message user">
                <img class="rounded-circle" src="{{Auth::user()->image->url ?? 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png'}}" width="60px" height="60px" alt="">
                <p class="message">Hola soy el usuario</p>

            </span> --}}

     
    
        </main>
     
            <form class="chat-area" id="chatbot" action="{{route('chatbot.prompt')}}">
                @csrf
                @method('post')
                <textarea name="prompt" id="chatArea" class="form-control">

                </textarea>
                <button type="submit" class="btn btn-primary">
                    Enviar
                </button>
            </form>
      
      
    </section>

</div>

<script type="module" src="{{asset('js/Chatbot/ChatbotPromptHandler.js')}}"></script>


@endsection