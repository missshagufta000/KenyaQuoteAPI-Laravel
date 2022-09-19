<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kanye West Quotes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="index.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen container">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 ml-2">
                <h1>Kanye West 5 Random Quotes</h1>
                <button class="btn btn-success btn-lg" id="refresh">Refresh</button>

                <div class="separator"></div>

                <div class="bg-quotes" id="quotesResult">
                    @foreach($quotes as $key => $quote)
                    <p>
                        <span class="text-bold">{{$loop->iteration}}.</span> 
                        <span class="quote">"{{$quote}}"</span>
                        <span class="text-bold"> - Kanye West</span>
                    </p>
                    @endforeach
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script type="text/javascript">
            $("#refresh").on("click", function(e) {
                e.preventDefault();
                $.ajax({
                    url: "../api/v2/quotes/random-five",
                    type: "GET",
                    data: { id: $(this).val(), access_token: $("#access_token").val() },
                    success: function(data) {
                        if(data){
                            $('#quotesResult').html(
                                data.quotes.map((quote, index) => {
                                    return (`
                                        <p>
                                            <span class="text-bold">${index+1}.</span> 
                                            <span class="quote">"${quote}"</span>
                                            <span class="text-bold"> - Kanye West</span>
                                        </p>
                                        `
                                    )
                                }));
                        } else {
                            $('#quotesResult').html('<div class="col-md-12 col-sm-12 col-xs-12 mb-3">'+
                                '<h5 class="card-title" style="text-align: center; color: brown;">No data!</h5>'+
                                '</div>'
                            );
                        }
                    },
                    error: function(err) {
                        alert('====error===', err);
                    }
                });
            });
        </script>
    </body>
</html>
