@extends('layout')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <h4 class="alert-heading">Well done!</h4>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="mx-auto p-4 col-md-6">
                    <h2 class="mb-4">I feel that I never was</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot. <br> <br>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                    <p class="mb-0 lead"> <a href="#">info@hello.com</a> </p>
                </div>
                
                <div class="mx-auto p-4 col-md-6">
                    <form>
                        <div class="form-group"> 
                            <label for="">Título</label>
                            <input type="text" class="form-control" id="form1" placeholder="text"> 
                        </div>

                        <div class="form-group"> 
                            <label for="">Comentários</label>
                            <textarea class="form-control" id="form2" rows="3" placeholder="Your message"></textarea> 
                        </div>

                        <div class="form-group"> 
                            <label for="">Data inicial</label>
                            <input type="text" class="form-control" id="form3" placeholder="dd/mm/yyyy"> 
                        </div>
                        
                        <div class="form-group"> 
                            <label for="">Data final</label>
                            <input type="text" class="form-control" id="form4" placeholder="dd/mm/yyyy"> 
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
