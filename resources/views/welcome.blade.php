<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .red {
                color: red
            }

            .green {
                color: green
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="main">
            @{{ message }}
            <span v-bind:class="className" v-if="isShow">count: @{{ data}}</span>
            <button onclick="changeColorRed()">Red</button>
            <button onclick="changeColorGreen()">Green</button>
          </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
        <script>
            var app = new Vue({
                el: '#main',
                data: {
                    message: 'Do you wanna build a Vue app?',
                    className: '',
                    data: 65,
                    isShow: true,
                }
            })
            const changeColorRed = () => {
                app.className= 'red'
            }

            const changeColorGreen = () => {
                app.className= 'green'
            }
        </script>
    </body>
</html>
