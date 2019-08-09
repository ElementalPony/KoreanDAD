<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.8.17/jquery-ui.min.js"></script>

  </head>
  <body>

    <div id="DADCo">
        <audio id="pronaunciation" src=""></audio>
        <div id=header>Korean Hangul (한글)</div>
        <div id="DADConsonantsCo" class="DADSectionBo">
          <div class="SectionHeader">Consonants</div>
          <div class="cardColumn">
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="gD"></div><p class="DropExp">g/k</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="nD"></div><p class="DropExp">n</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="dD"></div><p class="DropExp">d/t</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="rD"></div><p class="DropExp">r/l</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="mD"></div><p class="DropExp">m</p>
          </div>
          <div class="cardColumn">
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="bD"></div><p class="DropExp">b/p</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="sD"></div><p class="DropExp">s/t</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="ngD"></div><p class="DropExp">ng</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="jD"></div><p class="DropExp">j/t</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="chD"></div><p class="DropExp">ch/t</p>
          </div>
          <div class="cardColumn">
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="kD"></div><p class="DropExp">kh</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="tD"></div><p class="DropExp">t</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="pD"></div><p class="DropExp">p</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="hD"></div><p class="DropExp">h</p>
          </div>
        </div><div id="DADVowelsCo" class="DADSectionBo">
          <div class="SectionHeader">Vowels</div>
          <div class="cardColumn">
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="aD"></div><p class="DropExp">a</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="yaD"></div><p class="DropExp">ya</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="eoD"></div><p class="DropExp">eo</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="yeoD"></div><p class="DropExp">yeo</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="oD"></div><p class="DropExp">o</p>
          </div>
          <div class="cardColumn">
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="yoD"></div><p class="DropExp">yo</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="uD"></div><p class="DropExp">u</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="yuD"></div><p class="DropExp">yu</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="euD"></div><p class="DropExp">eu</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="iD"></div><p class="DropExp">i</p>
          </div>
        </div><div id="DADVowelsCombosCo" class="DADSectionBo">
          <div class="SectionHeader">Vowels Combinations</div>
          <div class="cardColumn">
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="aeD"></div><p class="DropExp">ae</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="yaeD"></div><p class="DropExp">yae</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="eD"></div><p class="DropExp">e</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="yeD"></div><p class="DropExp">ye</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="waD"></div><p class="DropExp">wa</p>
          </div>
          <div class="cardColumn">
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="waeD"></div><p class="DropExp">wae</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="oeD"></div><p class="DropExp">oe</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="weoD"></div><p class="DropExp">weo</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="weD"></div><p class="DropExp">we</p>
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="wiD"></div><p class="DropExp">wi</p>
          </div>
          <div class="cardColumn">
            <div class="cardDrop" ondrop="drop(event)" ondragover="allowDrop(event)" id="uiD"></div><p class="DropExp">ui</p>
          </div>
        </div>
        <div id="DADCardCo">
            <img src="_images/congratulations.png" id="congratulationsSign" class="hidden">
            <div id="a" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅏ</div>
            <div id="g" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㄱ</div>
            <div id="n" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㄴ</div>
            <div id="d" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㄷ</div>
            <div id="r" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㄹ</div>
            <div id="m" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅁ</div>
            <div id="b" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅂ</div>
            <div id="s" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅅ</div>
            <div id="ng" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅇ</div>
            <div id="j" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅈ</div>
            <div id="ch" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅊ</div>
            <div id="k" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅋ</div>
            <div id="t" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅌ</div>
            <div id="p" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅍ</div>
            <div id="h" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅎ</div>
            <div id="ya" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅑ</div>
            <div id="eo" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅓ</div>
            <div id="yeo" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅕ</div>
            <div id="o" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅗ</div>
            <div id="yo" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅛ</div>
            <div id="u" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅜ</div>
            <div id="yu" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅠ</div>
            <div id="eu" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅡ</div>
            <div id="i" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅣ</div>
            <div id="ae" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅐ</div>
            <div id="yae" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅒ</div>
            <div id="e" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅔ</div>
            <div id="ye" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅖ</div>
            <div id="wa" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅘ</div>
            <div id="wae" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅙ</div>
            <div id="oe" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅚ</div>
            <div id="weo" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅝ</div>
            <div id="we" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅞ</div>
            <div id="wi" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅟ</div>
            <div id="ui" draggable="true" ondragstart="drag(event)" class="card hidden AllCards">ㅢ</div>
        </div><br>
        <div id="ControlsCo"><h1 id="stopwatch">00:00:00</h1><div id="resetBtn">Restart</div><div id="centerBtn">Center Game</div></div>

        <p><b>Mobile controls:</b> Click on to a korean letter then into it's respective slot up above. <i>(works on PC as well)</i> After an incorrect selection the selected letter resets.<br>
           <b>Audio pronaunciation:</b> If u click on the romanized letters on the right of the letter slot, the proper pronaunciation will play <i>(WIP, if you click on one that does not have the pronaunciation availible it plays last availible audio file.)</i><br>
           <b>Center game:</b> Availible because the game is better on mobile if not centered <i>(With present coding)</i>, for people who like their world in balance tho. Feel free to center it ^.^<br>
           <br>
           If this helps you then please tell your friends about it :)<br>
           Message me with any feedback/suggestions on reddit <b><i>"u/ElementalPony"</b></i></p>
    </div>


    <script>
    var stopwatch = document.getElementById('stopwatch'),
    clear = document.getElementById('resetBtn'),
    seconds = 0, minutes = 0, hours = 0,
    t, DADProgress = 0,
    hand;

    var audioFiles = {
      "g/k": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/015/015058.mp3?_lsu_sa_=33b8205e2d193076e09661ae3094c0ff6da26885cf096f036b72057cdb336831585e575e6565337fd9926895f62e506afb19a0e6186463bb54080891e2c607df0020a5abec4a107a3f5e8a3359f2a0ec",
      "d/t": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/075/075072.mp3?_lsu_sa_=3de87f529da237f6ed9491f336b43efa9d1f6615ef06af3d63524473dbd76c215055d74a6f350f7529696665092f4084d63c07c355427e8e23af54c92d9f4a27a373d5997e1606645177a50ef4de2092",
      "r/l": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/027/027219.mp3?_lsu_sa_=3a886550ad813596e09c5199332456fbadb66c35920dbf9a66828c778b7c61116952374665b59a7309e76845892630fa118ef3cad05a549c6cc76cf9a0cb4a454fe71178d8eee2873b7759d0aa5f51dd",
      "m": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/027/027253.mp3?_lsu_sa_=3d28955ccd013686809c6141376467f0dd3364b5f50f6f856cd2bd741bd360311f53372767f57d7329b562d5df2d905b71b4be7b1ce18d92fdd8abdfa3943e8fd2b3515d56b720b7ea17a0ec040b306a",
      "b/p": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/076/076207.mp3?_lsu_sa_=3be8915a4d2a31a69a9fd1093a64e6f2bdd864c54a003fbf6f324171ebb26ad1f35ad70d61c5fb7ff9ab6045b52f80b406816ac8ea8780e638532ab4285ab75e87b27ba373d380bb745764e7be00dca7",
      "s/t": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/023/023791.mp3?_lsu_sa_=3f585b563dcb3306389ca10c362440fafd256b75b6037ffc6fa2d379cb576161945d37a66af5d07bd96461d5f82830a5b458ae04b1d3170c27d6683c2da1a35493a8a348f24c5ea87f799cdfcbc55899",
      "ng": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/015/015731.mp3?_lsu_sa_=3868315f1dba3b467294519f3964fbfced136a55170cdff56962d3713bbe6121ae5be73c62450f79098667c5e72210076f05d67e8842c70210ea6aebd8f86c8ab79581c69f01afc660a8c2003651536a",
      "j/t": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/078/078271.mp3?_lsu_sa_=3fd86b5e7d5c3a36e99b616530b452ffdd6968c54906bf1e63027c7abbb36791895747536a85cf76a94c6675192290d641f05ab2add28e22598faa32c7b18b4e7268db06d0180e1b2940b16d8bc1ef98",
      "ch/t": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/079/079056.mp3?_lsu_sa_=3f48ba515d583356d99a217b3154eeff4d5a6be5d803af3866e2ad7a9b5467b10e5117466475a075393161b5de22806e06e7d5d8e9306df316ecd5796001df399d593dad10f45f681945c75f138ca948",
      "kh": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/079/079310.mp3?_lsu_sa_=33e8b1565dc0370646975166356416f19df36a45e10ecf3765f20d7c6b866911b659177464f5737279436185aa2e50a65795e1bfca9c06a0dc7e4419fb3a6b23d83e25a78862fa2e0436a31f0ab0ac66",
      "t": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/041/041730.mp3?_lsu_sa_=3db80f5efdfc35768191c1d131941ef2bd456615a30b5fa763c23d7f0b5965519950f7a469a5cd73d9456785412cf0fb635dd64f6245011660269ffb32dcd7ebc6e1a75f079fddd1faec6e66fdf33c56",
      "p": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/079/079422.mp3?_lsu_sa_=3f8892590d603b565b9841c036a46ffcfd2c6655da01ffd46c825b744b9c6701e852b7a16ec5b97b69f364d50c2d40b3b9d4a5f16a23e3760e5bad44123e0ada",
      "h": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/031/031077.mp3?_lsu_sa_=36c868528d2d3f46c79de15e30a449fbcdf664a5e8042f8567b2fe74cb4361c12658f7f56805907889bc6175af22c0f1e0f497866ccf3190c9a9561e8d9db94f92d07de8b2432363ef47d26f805231ae",
      "a": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/043/043235.mp3?_lsu_sa_=3a7828593d303806ad97310f35b4d7f74dc260b52108cf846cc26a753b396561165e87c26c25c970a9896a95ac2b504db3aa811df00a33ec244a6e9a9e8e907d3737f21ab3cf83e58dd4c301dfd7eb50",
      "ya": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/000/000590.mp3?_lsu_sa_=3aa89b540da53a06b29b413b3804f7f46de165b5b70befc766a2c371cb466a41b05137e96485d67549d86ba54a2d9004b36eccedb5e9ff01396f13c4b14a3a02afb90aa95d5d95b005412e7209128b60",
      "u": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/043/043236.mp3?_lsu_sa_=3438ae5ded7134e64799a1b73354d0f84d7e63259a00afe160e27c7abb3962616e5067a56f15cb72e9106ca53f2ba078628fd02e68f638aae866d6830cf1cfda95eaa6f0dc9180f440cb6188d6482c0b",
      "yu": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/000/000790.mp3?_lsu_sa_=320849566dff3a16969851373cc43bfc6d9a63e58109dfe268c2a07d5bdb6151c35fa7246a35d079a9e06c453e20d09926508c19b97d84bbdd454ae4a021b978f2a2fb66835a145a0b1d61cd9c1ff100",
      "i": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/025/025766.mp3?_lsu_sa_=32f8645c7d033d567d9ab1d33c9481f30d4c6ef5b107df066022a170ebd760513452b7956805537fd9d06f85ab2b604deb717c60b6a4cee70a7e14c1a892019fd896fceb622b6585bc2269a990a0e9b9",
      "ye": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/000/000303.mp3?_lsu_sa_=32c8a4506dff36867f9911623db45af6cde66615e50e5f726b02487edb8d6fe1da5497c86b75c77fe9606e15982a604fef5258aa2845c7a504fa77071b3b5ef3d8798811aa8772cd5f78fa088bd887de",
// :O
      "wa": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/000/000548.mp3?_lsu_sa_=3fe857527dcc3da6989c511e3c6401ff4d0e6455090d5f6c6f22d67d1bba6851f65317de6dc53a7c39e06e05ac2a909932f9caca7d3049be0f6af57cad01381f1d86d6134aab6623a08e476b56a69484",
      "wae": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/000/000115.mp3?_lsu_sa_=3a48bd5e3d9c3476c89ff1703b3434f13d37673511051f896ca2a27fabeb60910750c7f261059878f9ac6585eb278041dab8575f39eb5877156d2a8bdf328fb90cdcee4226c64134aad103ae8d3b6f88",
      "ui": "https://dict-dn.pstatic.net/naver/dic/naverdic/krdic/sound/words/010/010776.mp3?_lsu_sa_=3ed8fd57dd0831364294818634947cfbdd426fe5d3036f116f625d77abbd6a11285a172461f50474d9176fd5c524c0df119ac0b368fcf20de36891920f9637c6f47394b017ad1ff3149f61b927447fee"
    };

    window.onload = load();
    function load(){
      reset();
    }

    function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
    }

    function reset(){
      var Cards = $(".AllCards"),
      CardContainer = $("#DADCardCo"),
      overlapping = true, xs = [], ys = [];
      for (var i = 0; i < Cards.length; i++) {
        Cards[i].classList.remove("hidden");
        Cards[i].classList.add("card");
        CardContainer.append(Cards[i]);
        while(overlapping) {
          var generatedX = Math.floor(Math.random() * 526);
          var generatedY = Math.floor(Math.random() * 95);
          if (xs.length == 0){
            overlapping = false;
          }else{
            for (var i = 0; i < xs.length; i++) {
              if (xs[i] > generatedX + 25 || generatedX > xs[i] + 25){
                overlapping = false
              }else{
                if (ys[i] > generatedY + 25 || generatedY > ys[i] + 25){
                  overlapping = false
                }else{
                  overlapping = true;
                  i = xs.length;
                }
              }
            }
          }
        }
        xs[ys.length] = generatedX;
        ys[ys.length] = generatedY;
        overlapping = true;
        Cards[i].setAttribute("style", "top: " + generatedY + "; left: " + generatedX + ";");
      }
      DADProgress = 0;
      $("#congratulationsSign").addClass("hidden");
      clearTimeout(t);
      timer();
    }

    function drop(event) {
      event.preventDefault();
      var data = event.dataTransfer.getData("text");
      var element = document.getElementById(data);
      if (data + "D" == event.target.id){
        element.classList.remove("cardShadow");
        element.classList.remove("card");
        event.target.appendChild(element);
        DADProgress++;
        if (DADProgress == 35){
          document.getElementById("congratulationsSign").classList.remove("hidden");
          clearTimeout(t);
        }
      }
    }

    function add() {
        seconds++;
        if (seconds >= 60) {
            seconds = 0;
            minutes++;
            if (minutes >= 60) {
                minutes = 0;
                hours++;
            }
        }
        stopwatch.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);
        timer();
      }

      function timer() {
          t = setTimeout(add, 1000);
      }

      $(".card").click(function() {
        if ($(this).hasClass("card")){
          $(".selected").removeClass("selected");
          $(this).addClass("selected");
        }
      });

      $(".DropExp").click(function(){
        $("#pronaunciation").attr("src", audioFiles[$(this).html()]);
        var audio = document.getElementById("pronaunciation");
        audio.play();
      });

      $(".cardDrop").click(function(){
        var element = document.getElementById($(".selected").attr('id'));
        var target = document.getElementById($(this).attr('id'));
        if ($(".selected").attr('id') + "D" == $(this).attr('id')){
          element.classList.remove("cardShadow");
          element.classList.remove("card");
          element.classList.remove("selected");
          target.appendChild(element);
          DADProgress++;
          if (DADProgress == 35){
            document.getElementById("congratulationsSign").classList.remove("hidden");
            clearTimeout(t);
          }
        }else{
          $(".selected").removeClass("selected");
        }
      });

      $("#centerBtn").click(function(){
      console.log("test");
        if($("#DADCo").hasClass("center-div")){
          $("#DADCo").removeClass("center-div");
          console.log("test1");
        }else{
          $("#DADCo").addClass("center-div");
          console.log("tes2t");
        }
      });

      clear.onclick = function() {
          reset();
          stopwatch.textContent = "00:00:00";
          seconds = 0; minutes = 0; hours = 0;
      }
    </script>

  </body>
</html>
