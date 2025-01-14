<x-layout>
    
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center">
            <div class="col-12 col-md-6 bg-contact align-items-center justify-content-center d-flex">
                <h1 class="text-center display-4 contact-title title-height title">
                    <span class="shadow-bg font-custom">Contattaci!</span>
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                @if (session()->has('emailError'))
                <div class="alert alert-danger">
                    {{ session('emailError') }}
                </div>
                @endif
                
                <form class="p-5 box-bg title-custom shadow rounded" method="POST" action="{{route('contact.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Inserisci il tuo nome completo</label>
                        <input type="text" class="form-control" id="username" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci la tua mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Scrivici il tuo messaggio</label>
                        <textarea name="description" class="form-control" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>