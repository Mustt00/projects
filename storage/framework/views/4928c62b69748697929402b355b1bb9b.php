<html>

<head>
    <title> To Do App </title>
    <style>
        .underline-hover {
            text-decoration: none;
        }

        .underline-hover:hover {
            text-decoration: overline;
        }
    </style>
</head>
    <h3>silmek istediğiniz yazının üzerine basarak silebilirsinizz</h3>
<body>
    <h1 style="margin-left: 718px; margin-top: 170px">TASKS</h1>
    <div class="form-group" style="margin-left: 619px; margin-bottom: 20px;">
        <input id="myInput" placeholder="Task..." class="form-control" name="description"
            style="width: 300px; height: 35px; border-radius: 20px; padding: 10px" />
    </div>
    <div class="form-group" style="margin-left: 619px;">
        <button onclick="writeText()" id="myButton"
            style="width: 300px; height: 35px; background-color: aqua; border-radius: 20px">
            CreateTask </button>
        <div id="output" style="margin-left: 100px;"></div>
        <script>
            function writeText() {
                var inputValue = document.getElementById("myInput").value;
                var newParagraph = document.createElement("p");
                newParagraph.textContent = inputValue;
                newParagraph.onclick = function() {
                    this.remove();
                };
                document.getElementById("output").appendChild(newParagraph);
                document.getElementById("myInput").value = '';
            }
        </script>
    </div>
</body>

</html>
<?php /**PATH C:\Users\musta\OneDrive\Masaüstü\todoapp\resources\views/tasks/create.blade.php ENDPATH**/ ?>