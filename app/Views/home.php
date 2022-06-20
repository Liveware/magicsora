<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masic Sora</title>
    <link rel="stylesheet" href="/vendors/normalize.css">
    <link rel="stylesheet" href="/statics/css/style.css">
</head>
<body>
    <div class="question">
        <input type="button" value="지금 내 고민에 대한 해답은?" onclick="getAnswer()">
    </div>
    <div class="answer hide">
        <p id="answer"></p>
        <input type="button" value="다시" onclick="reset()">
    </div>
    <script>
        function getAnswer(){
            fetch('/answer')
            .then((res) => res.json())
            .then((res) => {
                document.querySelector('#answer').innerHTML = res['answer'];
                document.querySelector('.answer').classList.remove('hide');
                document.querySelector('.question').classList.add('hide');
            });
        }
        function reset(){
            location.reload();
            document.querySelector('.answer').classList.add('hide');
            document.querySelector('.question').classList.remove('hide');
        }
    </script>
</body>
</html>