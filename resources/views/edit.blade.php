@extends('layout')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="mx-auto p-4 col-md-6">
                    <h2 class="mb-4">I feel that I never was</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot. <br> <br>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                    <p class="mb-0 lead"> <a href="#">info@hello.com</a> </p>
                </div>
                
                <div class="mx-auto p-4 col-md-6">
                    <form method="POST" action="{{ route('announcements.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group"> 
                            <label for="">Título</label>
                            <input 
                                class="form-control @error('title') is-invalid @enderror" 
                                type="text" 
                                id="form1" 
                                required 
                                name="title"
                                value="{{ $announcement->title }}">

                            @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    Este campo é obrigatório e deve conter entre 3 e 100 caracteres.
                                </div>
                            @endif
                        </div>

                        <div class="form-group"> 
                            <label for="">Comentários</label>
                            <textarea 
                                class="form-control @error('comments') is-invalid @enderror" 
                                id="form2" 
                                rows="3"
                                name="comments" 
                                required>{{ $announcement->comments }}</textarea> 
                            
                            @if ($errors->has('comments'))
                                <div class="invalid-feedback">
                                    Este campo é obrigatório e deve conter no mínimo 2 caracteres.
                                </div>
                            @endif
                        </div>

                        <div class="form-row">
                            <div class='col-md-6'>
                                <div class="form-group">
                                    <label for="">Data inicial</label>
                                    <div class="input-group date" id="datepicker1">
                                        <input type="text" 
                                            id="form3"
                                            class="form-control" 
                                            data-target="#datepicker1" 
                                            name="start_date" 
                                            value="{{ $announcement->start_date }}" 
                                            required>

                                        <div class="input-group-append" data-target="#datepicker1" data-toggle="datepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>

                                    @if ($errors->has('start_date'))
                                        <div class="invalid-feedback">
                                            Este campo é obrigatório.
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class='col-md-6'>
                                <div class="form-group">
                                    <label for="">Data final</label>
                                    <div class="input-group date" id="datepicker2">
                                        <input type="text"
                                            id="form4" 
                                            class="form-control" 
                                            data-target="#datepicker2" 
                                            name="expiration_date" 
                                            value="{{ $announcement->expiration_date }}" 
                                            required>

                                        <div class="input-group-append" data-target="#datepicker2" data-toggle="datepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>

                                    @if ($errors->has('expiration_date'))
                                        <div class="invalid-feedback">
                                            Este campo é obrigatório.
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            $('.input-group.date').datepicker({
                format: "dd/mm/yyyy",
                todayBtn: true,
                language: "pt-BR",
                autoclose: true,
                todayHighlight: true
            });

            $("#datepicker1").on("changeDate", function (e) {
                $('#datepicker2').datepicker('setStartDate', e.date);
            });

            $("#datepicker2").on("changeDate", function (e) {
                $('#datepicker1').datepicker('setEndDate', e.date);
            });
        });
    </script>
@endsection
