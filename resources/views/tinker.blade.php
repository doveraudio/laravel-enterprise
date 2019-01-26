@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is the Tinker Screen
                    <div class="">
                    <textarea id="code" rows="15" cols="132"></textarea>
                    
                    </div>
                    <br>
                    <button onclick="getResults()">Exec</button>
                </div>
            </div>
        </div>
        </div>
        <div class="row"></div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Results</div>

                <div class="card-body">
                    

                   
                    <div id="result">
                    

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function getResults(){
    let data = {code: document.getElementById("code").value};
    //console.log(data);
        axios.post('/execute', data).then(res => {
            document.getElementById("result").textContent = JSON.stringify(res.data);
            console.log(JSON.stringify(res));
            console.log(JSON.stringify(res.data));
        });

    }
    </script>
</div>
@endsection
