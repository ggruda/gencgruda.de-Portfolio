@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-4" style="border-radius: 100%; padding: 20px 50px 0 50px; overflow: hidden; background-color: #e4edf2;">
            <center>
                <img  width="250" src="/images/gencgruda.png" alt="">
            </center>
        </div>

        <div class="col-lg-7 py-lg-3" id="typed"></div>
    </div>


@endsection


@section('extraJS')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>


    <script type="text/javascript">
        $(function() {
            $("#typed").typed({
                strings: [
                    "<h4> Hallo und herzlich willkommen auf meiner bescheidenen Portfolio-Seite. <h4>",
                    "<h6>Mein Name ist Genc Gruda. <br>Ich bin seit über 10 Jahren begeisteter Software-Entwickler. <br> Zuhause fühle ich mich im Backend(PHP/Laravel), bin aber auch für jeden Spaß im Frontend(Blade, Vue3 usw...) zu haben.</h6>",
                ],
                typeSpeed: 50,
                backSpeed: 1,
                backDelay: 5000,
                startDelay: 1000,
            });

        });
    </script>
@endsection




