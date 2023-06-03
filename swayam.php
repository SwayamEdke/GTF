<?php
session_start();
?>

<html>

<head>
    <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 65%;
            height: 30%;
            margin-top: 10%;
        }

        div.justified {
            display: flex;
            justify-content: center;
            margin-top: 6%;
        }

        div.sec {
            background-image: url('skb.png');
            height: 420px;
            width: 20%;
            margin-left: 600px;
            margin-top: 160px;
            padding-top: 40px;
            border-radius: 15%;
        }

        .center {
            margin: 0;
            position: absolute;
            top: 430px;
            left: 760px;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .lf {
            margin: 0;
            position: absolute;
            top: 430px;
            left: 720px;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .ex {
            margin: 0;
            position: absolute;
            top: 430px;
            left: 810px;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .lbl {
            display: inline-block;
            width: 200px;
            margin-left: 74px;
            margin-top: 90px;
            font-size: 25px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        }

        body {
            background-image: url('fg.png');
        }

        #sub {
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 18px;
            padding-right: 18px;
            background-image: linear-gradient(#e7e7e7, #e9e9e9, #e2e2e2, #d1d1d1, #cacaca, #cdcdcd);
            border-color: azure;
            font-family: “Comic Sans MS”, “Comic Sans”, cursive;
            border-radius: 90%;
        }

        #res {
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 18px;
            padding-right: 18px;
            background-image: linear-gradient(#e7e7e7, #e9e9e9, #e2e2e2, #d1d1d1, #cacaca, #cdcdcd);
            border-color: azure;
            font-family: “Comic Sans MS”, “Comic Sans”, cursive;
            border-radius: 90%;
        }

        #exi {
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 18px;
            padding-right: 18px;
            background-image: linear-gradient(#e7e7e7, #e9e9e9, #e2e2e2, #d1d1d1, #cacaca, #cdcdcd);
            border-color: azure;
            font-family: “Comic Sans MS”, “Comic Sans”, cursive;
            border-radius: 90%;
        }

        .live {
            margin-top: -300px;
            margin-left: 130px;
        }

    </style>
</head>

<body>
    <div class="card">
        <form name="form1" method="post" action="su.php">
            <div class="sec">
                <img src="india.png" width=100% id="flag_img" height=100% />
                <div class="justified"><input type="text" id="flag_name" name="flag_name" /></div>
                <div class="center"><input type="button" id="sub" name="sub" onclick="next()" value="SUBMIT" /></div>
                <div class="lf"><input type="button" value="RESTART" name="re" id="res" onclick="index=0;img.src=imgarray[index];re.hidden=true;document.getElementById('marks').hidden=true;marks=0;current=0;document.form1.sub.click();document.form1.sub.hidden=false;document.form1.exi.hidden=true;document.getElementById('ll').hidden=false;" hidden></div>
                <div class="ex"><input type="submit" value="EXIT" name="exi" id="exi" hidden></div>
                <div class="lbl"><label id="marks"></label> </div>
                <div class="live"><label id="ll"></label> </div>
            </div>
        </form>
    </div>
    <script type='text/javascript'>
        imgarray = ['http://localhost/phpprograms/india.png', 'http://localhost/phpprograms/albania.png', 'http://localhost/phpprograms/algeria.png', 'http://localhost/phpprograms/afghanistan.png', 'http://localhost/phpprograms/Andorra.png', 'http://localhost/phpprograms/Angola.png', 'http://localhost/phpprograms/antigua_and_barbuda.png', 'http://localhost/phpprograms/argentina.png', 'http://localhost/phpprograms/armenia.png', 'http://localhost/phpprograms/australia.png', 'http://localhost/phpprograms/austria.png', 'http://localhost/phpprograms/azerbaijan.png', 'http://localhost/phpprograms/bahamas.png', 'http://localhost/phpprograms/bahrain.png', 'http://localhost/phpprograms/bangladesh.png', 'http://localhost/phpprograms/barbados.png', 'http://localhost/phpprograms/belarus.png', 'http://localhost/phpprograms/belgium.png', 'http://localhost/phpprograms/belize.png', 'http://localhost/phpprograms/benin.png', 'http://localhost/phpprograms/bhutan.png', 'http://localhost/phpprograms/bolivia.png',
            'http://localhost/phpprograms/bosnia_and_herzegovina.png', 'http://localhost/phpprograms/botswana.png', 'http://localhost/phpprograms/brazil.png', 'http://localhost/phpprograms/brunei.png', 'http://localhost/phpprograms/bulgaria.png', 'http://localhost/phpprograms/burkina_faso.png', 'http://localhost/phpprograms/burundi.png', 'http://localhost/phpprograms/cambodia.png', 'http://localhost/phpprograms/cameroon.png', 'http://localhost/phpprograms/canada.png', 'http://localhost/phpprograms/cape_verde.png', 'http://localhost/phpprograms/central_african_republic.png', 'http://localhost/phpprograms/chad.png', 'http://localhost/phpprograms/chile.png', 'http://localhost/phpprograms/colombia.png', 'http://localhost/phpprograms/comoros.png', 'http://localhost/phpprograms/costa_rica.png', 'http://localhost/phpprograms/ivory_coast.png', 'http://localhost/phpprograms/croatia.png', 'http://localhost/phpprograms/cuba.png', 'http://localhost/phpprograms/cyprus.png', 'http://localhost/phpprograms/czech_republic.png', 'http://localhost/phpprograms/drc.png',
            'http://localhost/phpprograms/denmark.png', 'http://localhost/phpprograms/djibouti.png', 'http://localhost/phpprograms/dominica.png', 'http://localhost/phpprograms/dominican_republic.png', 'http://localhost/phpprograms/east_timor.png', 'http://localhost/phpprograms/ecuador.png', 'http://localhost/phpprograms/egypt.png', 'http://localhost/phpprograms/el_salvador.png', 'http://localhost/phpprograms/equatorial_guinea.png', 'http://localhost/phpprograms/eritrea.png', 'http://localhost/phpprograms/estonia.png', 'http://localhost/phpprograms/eswatini.png', 'http://localhost/phpprograms/ethiopia.png', 'http://localhost/phpprograms/micronesia.png', 'http://localhost/phpprograms/fiji.png', 'http://localhost/phpprograms/finland.png', 'http://localhost/phpprograms/france.png', 'http://localhost/phpprograms/gabon.png', 'http://localhost/phpprograms/gambia.png', 'http://localhost/phpprograms/georgia.png', 'http://localhost/phpprograms/germany.png', 'http://localhost/phpprograms/ghana.png', 'http://localhost/phpprograms/greece.png', 'http://localhost/phpprograms/grenada.png', 'http://localhost/phpprograms/guatemala.png',
            'http://localhost/phpprograms/guinea.png', 'http://localhost/phpprograms/guinea-bissau.png', 'http://localhost/phpprograms/guyana.png', 'http://localhost/phpprograms/haiti.png', 'http://localhost/phpprograms/honduras.png', 'http://localhost/phpprograms/hungary.png', 'http://localhost/phpprograms/iceland.png', 'http://localhost/phpprograms/indonesia.png', 'http://localhost/phpprograms/iran.png', 'http://localhost/phpprograms/iraq.png', 'http://localhost/phpprograms/ireland.png', 'http://localhost/phpprograms/israel.png', 'http://localhost/phpprograms/italy.png', 'http://localhost/phpprograms/jamaica.png', 'http://localhost/phpprograms/japan.png', 'http://localhost/phpprograms/jordan.png', 'http://localhost/phpprograms/kazakhstan.png', 'http://localhost/phpprograms/kenya.png', 'http://localhost/phpprograms/kiribati.png', 'http://localhost/phpprograms/kosovo.png', 'http://localhost/phpprograms/kuwait.png', 'http://localhost/phpprograms/kyrgyzstan.png',
            'http://localhost/phpprograms/laos.png', 'http://localhost/phpprograms/latvia.png', 'http://localhost/phpprograms/lebanon.png', 'http://localhost/phpprograms/lesotho.png', 'http://localhost/phpprograms/liberia.png', 'http://localhost/phpprograms/libya.png', 'http://localhost/phpprograms/liechtenstein.png', 'http://localhost/phpprograms/lithuania.png', 'http://localhost/phpprograms/luxembourg.png', 'http://localhost/phpprograms/madagascar.png', 'http://localhost/phpprograms/malawi.png', 'http://localhost/phpprograms/malaysia.png', 'http://localhost/phpprograms/maldives.png', 'http://localhost/phpprograms/mali.png', 'http://localhost/phpprograms/malta.png', 'http://localhost/phpprograms/marshall_islands.png', 'http://localhost/phpprograms/mauritania.png', 'http://localhost/phpprograms/mauritius.png', 'http://localhost/phpprograms/mexico.png', 'http://localhost/phpprograms/moldova.png', 'http://localhost/phpprograms/monaco.png', 'http://localhost/phpprograms/mongolia.png',
            'http://localhost/phpprograms/montenegro.png', 'http://localhost/phpprograms/morocco.png', 'http://localhost/phpprograms/mozambique.png', 'http://localhost/phpprograms/myanmar.png', 'http://localhost/phpprograms/namibia.png', 'http://localhost/phpprograms/nauru.png', 'http://localhost/phpprograms/nepal.png', 'http://localhost/phpprograms/netherlands.png', 'http://localhost/phpprograms/new_zealand.png', 'http://localhost/phpprograms/nicaragua.png', 'http://localhost/phpprograms/niger.png', 'http://localhost/phpprograms/nigeria.png', 'http://localhost/phpprograms/north_kr.png', 'http://localhost/phpprograms/north_mace.png', 'http://localhost/phpprograms/norway.png', 'http://localhost/phpprograms/oman.png', 'http://localhost/phpprograms/pakistan.png', 'http://localhost/phpprograms/palau.png', 'http://localhost/phpprograms/palestine.png', 'http://localhost/phpprograms/panama.png', 'http://localhost/phpprograms/pang.png', 'http://localhost/phpprograms/paraguay.png', 'http://localhost/phpprograms/china.png', 'http://localhost/phpprograms/peru.png', 'http://localhost/phpprograms/philippines.png', 'http://localhost/phpprograms/poland.png',
            'http://localhost/phpprograms/portugal.png', 'http://localhost/phpprograms/qatar.png', 'http://localhost/phpprograms/roc.png', 'http://localhost/phpprograms/romania.png', 'http://localhost/phpprograms/russia.png', 'http://localhost/phpprograms/rwanda.png', 'http://localhost/phpprograms/skn.png', 'http://localhost/phpprograms/sl.png', 'http://localhost/phpprograms/svg.png', 'http://localhost/phpprograms/samoa.png', 'http://localhost/phpprograms/sm.png', 'http://localhost/phpprograms/stp.png', 'http://localhost/phpprograms/sar.png', 'http://localhost/phpprograms/senegal.png', 'http://localhost/phpprograms/serbia.png', 'http://localhost/phpprograms/seychelles.png', 'http://localhost/phpprograms/siel.png', 'http://localhost/phpprograms/singapore.png', 'http://localhost/phpprograms/slovakia.png', 'http://localhost/phpprograms/slovenia.png', 'http://localhost/phpprograms/sisl.png', 'http://localhost/phpprograms/somalia.png', 'http://localhost/phpprograms/sa.png', 'http://localhost/phpprograms/sk.png', 'http://localhost/phpprograms/ssu.png', 'http://localhost/phpprograms/spain.png',
            'http://localhost/phpprograms/srl.png', 'http://localhost/phpprograms/sudan.png', 'http://localhost/phpprograms/suriname.png', 'http://localhost/phpprograms/sweden.png', 'http://localhost/phpprograms/swi.png', 'http://localhost/phpprograms/syria.png', 'http://localhost/phpprograms/taiwan.png', 'http://localhost/phpprograms/tjk.png', 'http://localhost/phpprograms/tanzania.png', 'http://localhost/phpprograms/thai.png', 'http://localhost/phpprograms/togo.png', 'http://localhost/phpprograms/tonga.png', 'http://localhost/phpprograms/tat.png', 'http://localhost/phpprograms/tunisia.png', 'http://localhost/phpprograms/turkey.png', 'http://localhost/phpprograms/turk.png', 'http://localhost/phpprograms/tuvalu.png', 'http://localhost/phpprograms/uganda.png', 'http://localhost/phpprograms/ukraine.png', 'http://localhost/phpprograms/uae.png', 'http://localhost/phpprograms/uk.png', 'http://localhost/phpprograms/usa.png', 'http://localhost/phpprograms/uru.png', 'http://localhost/phpprograms/uzb.png', 'http://localhost/phpprograms/vanuatu.png', 'http://localhost/phpprograms/vatc.png',
            'http://localhost/phpprograms/vene.png', 'http://localhost/phpprograms/viet.png', 'http://localhost/phpprograms/yemen.png', 'http://localhost/phpprograms/zambia.png', 'http://localhost/phpprograms/zimb.png'
        ]
        namearray = ['india', 'albania', 'algeria', 'afghanistan', 'andorra', 'angola', 'antigua and barbuda', 'argentina', 'armenia', 'australia', 'austria', 'azerbaijan', 'bahamas', 'bahrain', 'bangladesh', 'barbados', 'belarus', 'belgium', 'belize', 'benin', 'bhutan', 'bolivia', 'bosnia and herzegovina',
            'botswana', 'brazil', 'brunei', 'bulgaria', 'burkina faso', 'burundi', 'cambodia', 'cameroon', 'canada', 'cape verde', 'central african republic', 'chad', 'chile', 'colombia', 'comoros', 'costa rica', 'ivory coast', 'croatia', 'cuba', 'cyprus', 'czech republic', 'democratic republic of congo',
            'denmark', 'djibouti', 'dominica', 'dominican republic', 'east timor', 'ecuador', 'egypt', 'el salvador', 'equatorial guinea', 'eritrea', 'estonia', 'eswatini', 'ethiopia', 'micronesia', 'fiji', 'finland', 'france', 'gabon', 'gambia', 'georgia', 'germany', 'ghana', 'greece', 'grenada', 'guatemala', 'guinea',
            'guinea-bissau', 'guyana', 'haiti', 'honduras', 'hungary', 'iceland', 'indonesia', 'iran', 'iraq', 'ireland', 'israel', 'italy', 'jamaica', 'japan', 'jordan', 'kazakhstan', 'kenya', 'kiribati', 'kosovo', 'kuwait', 'kyrgyzstan', 'laos', 'latvia', 'lebanon', 'lesotho', 'liberia', 'libya', 'liechtenstein',
            'lithuania', 'luxembourg', 'madagascar', 'malawi', 'malaysia', 'maldives', 'mali', 'malta', 'marshall islands', 'mauritania', 'mauritius', 'mexico', 'moldova', 'monaco', 'mongolia', 'montenegro', 'morocco', 'mozambique', 'myanmar', 'namibia', 'nauru', 'nepal', 'netherlands', 'new zealand', 'nicaragua',
            'niger', 'nigeria', 'north korea', 'north macedonia', 'norway', 'oman', 'pakistan', 'palau', 'palestine', 'panama', 'papua new guinea', 'paraguay', 'china', 'peru', 'philippines', 'poland', 'portugal', 'qatar', 'republic of congo', 'romania', 'russia', 'rwanda', 'saint kitts and nevis', 'saint lucia',
            'saint vincent and grenadines', 'samoa', 'san marino', 'sao tome and principe', 'saudi arabia', 'senegal', 'serbia', 'seychelles', 'sierra leone', 'singapore', 'slovakia', 'slovenia', 'solomon islands', 'somalia', 'south africa', 'south korea', 'south sudan', 'spain', 'sri lanka', 'sudan', 'suriname',
            'sweden', 'switzerland', 'syria', 'taiwan', 'tajikistan', 'tanzania', 'thailand', 'togo', 'tonga', 'trinidad and tobago', 'tunisia', 'turkey', 'turkmenistan', 'tuvalu', 'uganda', 'ukraine', 'uae', 'uk', 'usa', 'uruguay', 'uzbekistan', 'vanuatu', 'vatican city', 'venezuela', 'vietnam', 'yemen', 'zambia', 'zimbabwe'
        ]
        var en = document.getElementById('flag_name')
        en.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                document.getElementById('sub').click()
            }
        })
        index = 0
        let marks = 0
        current = 0
        let n = 0
        document.form1.sub.click()

        function next() {
            if (index != (imgarray.length)) {
                img = document.getElementById('flag_img')
                name = document.form1.flag_name.value.trim().toLowerCase()
                current++
                if (imgarray.indexOf(img.src) == namearray.indexOf(name))
                    marks++
                img.src = imgarray[index++]
                document.getElementById('ll').innerHTML = current + " / 197"
                form1.reset()
            } else {
                img = document.getElementById('flag_img');
                name = document.form1.flag_name.value;
                if (imgarray.indexOf(img.src) == namearray.indexOf(name))
                    marks++
                document.form1.sub.hidden = true
                document.getElementById('ll').hidden = true
                document.getElementById('marks').hidden = false
                document.getElementById('marks').innerHTML = "Your Score " + marks
                n = marks
                document.cookie = "score=" + n
                form1.re.hidden = false
                form1.exi.hidden = false
            }
        }
    </script>

</body>

</html>