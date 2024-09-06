<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sklep z ziolami</title>
        <style>
            *{
                margin: 0 0 0 0;
                padding: 0;
                font-family: arial;
            }
            body{
                width: 100%;
                background-color: green;
            }
            header{
                color: white;
                text-align: center;
                font-size: 20px;
            }
            #containersklep{
                background-color: greenyellow;
                width: 100%;
                z-index: 1;
                text-align: center;
                display: none;
            }
            table, th{
                border-collapse: collapse;
                border: 1px solid black;
            }
            button{
                border: none;
                height: 100%;
            }
            #buttonhold{
                height: 100%;
            }
            #kslep{
                background-color: rgb(58, 165, 63);
                height: 25px;
                width: 50%;
            }
            button:hover{
                background-color: gray;
                transition: 1s;
            }
            #contutorial{
                float: left;
                background-color: greenyellow;
                width: 100%;
                z-index: 1;
                text-align: center;
                display: none;
            }
            #tutorialbut{
                background-color: rgb(58, 165, 63);
                height: 25px;
                width: 50%;
                visibility: 50%;
            }
            #buttonhold{
                width: 100%;
                background: green;
                display: flex;
            }
            #buttonhold button.active{
                background-color: rgb(0,255,0);
                transition: 1s;
            }
            #leftpanel{
                text-align: center;
                float: left;
                width: 50%;
                background-color: green;
            }
            #rightpanel{
                width: 50%;
                text-align: center;
                float: right;
                background-color: green;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>ziolo?</h1>
        </header>
        <div id="buttonhold">
            <button class="tablinks" id="kslep" onclick="show(event, 'containersklep')">Sklep</button>
            <button class="tablinks" id="tutorialbut" onclick="show(event, 'contutorial')">Jak i po co</button>
        </div>
        <div id="containersklep" class="tabcontent">
            <div id="leftpanel">
                <h1>Towar:</h1>
                <table>
                    <tr>
                        <th>Produkt</th>
                        <th>Cena (kg)</th>
                    </tr>
                </table>
            </div>
            <div id="rightpanel">
                <h1>Złóż zamowienie:</h1>
            </div>
        </div>
        <div id="contutorial" class="tabcontent">
            <h1>nie ma kontaktu nara</h1>
        </div>
    </body>
    <script type="text/javascript">
        function show(evt, tabname){
            var i, tabcontent, tablinks;
            var tabcontent = document.getElementsByClassName("tabcontent");
            for(i=0;i<tabcontent.length;i++){
                tabcontent[i].style.display = "none";
            }
            var tablinks = document.getElementsByClassName("tablinks");
            for(i=0;i<tablinks.length;i++){
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabname).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</html>