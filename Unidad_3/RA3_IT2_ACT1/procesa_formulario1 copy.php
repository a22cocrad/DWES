<?php
if (!isset($_POST['submit'])) {
    echo 'ERROR. Debes rellenar el formulario.';
} else {
    session_start();
    // https://www.uv.mx/pozarica/caa-conta/files/2016/02/REGULAR-AND-IRREGULAR-VERBS.pdf
    $verbList = array(
        array("Arise", "Arose", "Arisen", "Surgir, Levantarse"),
        array("Awake", "Awoke", "Awoken", "Despertarse"),
        array("Be/ am, are, is", "Was / Were", "Been", "Ser / Estar"),
        array("Bear", "Bore", "Borne / Born", "Soportar, dar a luz"),
        array("Beat", "Beat", "Beaten", "Golpear"),
        array("Become", "Became", "Become", "Llegar a Ser"),
        array("Begin", "Began", "Begun", "Empezar"),
        array("Bend", "Bent", "Bent", "Doblar"),
        array("Bet", "Bet", "Bet", "Apostar"),
        array("Bind", "Bound", "Bound", "Atar, encuadernar"),
        array("Bid", "Bid", "Bid", "Pujar"),
        array("Bite", "Bit", "Bitten", "Morder"),
        array("Bleed", "Bled", "Bled", "Sangrar"),
        array("Blow", "Blew", "Blown", "Soplar"),
        array("Break", "Broke", "Broken", "Romper"),
        array("Breed", "Bred", "Bred", "Criar"),
        array("Bring", "Brought", "Brought", "Traer Llevar"),
        array("Broadcast", "Broadcast", "Broadcast", "Radiar"),
        array("Build", "Built", "Built", "Edificar"),
        array("Burn", "Burnt / Burned", "Burnt / Burned", "Quemar"),
        array("Burst", "Burst", "Burst", "Reventar"),
        array("Buy", "Bought", "Bought", "Comprar"),
        array("Cast", "Cast", "Cast", "Arrojar"),
        array("Catch", "Caught", "Caught", "Coger"),
        array("Come", "Came", "Come", "Venir"),
        array("Cost", "Cost", "Cost", "Costar"),
        array("Cut", "Cut", "Cut", "Cortar"),
        array("Choose", "Chose", "Chosen", "Elegir"),
        array("Cling", "Clung", "Clung", "Agarrarse"),
        array("Creep", "Crept", "Crept", "Arrastrarse"),
        array("Deal", "Dealt", "Dealt", "Tratar"),
        array("Dig", "Dug", "Dug", "Cavar"),
        array("Do (Does)", "Did", "Done", "Hacer"),
        array("Draw", "Drew", "Drawn", "Dibujar"),
        array("Dream", "Dreamt / Dreamed", "Dreamt / Dreamed", "Soñar"),
        array("Drink", "Drank", "Drunk", "Beber"),
        array("Drive", "Drove", "Driven", "Conducir"),
        array("Eat", "Ate", "Eaten", "Comer"),
        array("Fall", "Fell", "Fallen", "Caer"),
        array("Feed", "Fed", "Fed", "Alimentar"),
        array("Feel", "Felt", "Felt", "Sentir"),
        array("Fight", "Fought", "Fought", "Luchar"),
        array("Find", "Found", "Found", "Encontrar"),
        array("Flee", "Fled", "Fled", "Huir"),
        array("Fly", "Flew", "Flown", "Volar"),
        array("Forbid", "Forbade", "Forbidden", "Prohibir"),
        array("Forget", "Forgot", "Forgotten", "Olvidar"),
        array("Forgive", "Forgave", "Forgiven", "Perdonar"),
        array("Freeze", "Froze", "Frozen", "Helar"),
        array("Get", "Got", "Got / Gotten", "Obtener"),
        array("Give", "Gave", "Given", "Dar"),
        array("Go (Goes)", "Went", "Gone", "Ir"),
        array("Grow", "Grew", "Grown", "Crecer"),
        array("Grind", "Ground", "Ground", "Moler"),
        array("Hang", "Hung", "Hung", "Colgar"),
        array("Have", "Had", "Had", "Haber o Tener"),
        array("Hear", "Heard", "Heard", "Oir"),
        array("Hide", "Hid", "Hidden", "Ocultar"),
        array("Hit", "Hit", "Hit", "Golpear"),
        array("Hold", "Held", "Held", "Agarrar Celebrar"),
        array("Hurt", "Hurt", "Hurt", "Herir"),
        array("Keep", "Kept", "Kept", "Conservar"),
        array("Know", "Knew", "Known", "Saber Conocer"),
        array("Kneel", "Knelt", "Knelt", "Arrodillarse"),
        array("Knit", "Knit", "Knit", "Hacer punto"),
        array("Lay", "Laid", "Laid", "Poner"),
        array("Lead", "Led", "Led", "Conducir"),
        array("Lean", "Leant", "Leant", "Apoyarse"),
        array("Leap", "Leapt", "Leapt", "Brincar"),
        array("Learn", "Learnt / Learned", "Learnt / Learned", "Aprender"),
        array("Leave", "Left", "Left", "Dejar"),
        array("Lend", "Lent", "Lent", "Prestar"),
        array("Let", "Let", "Let", "Permitir"),
        array("Lie", "Lay", "Lain", "Echarse"),
        array("Light", "Lit", "Lit", "Encender"),
        array("Lose", "Lost", "Lost", "Perder"),
        array("Make", "Made", "Made", "Hacer"),
        array("Mean", "Meant", "Meant", "Significar"),
        array("Meet", "Met", "Met", "Encontrar"),
        array("Mistake", "Mistook", "Mistaken", "Equivocar"),
        array("Overcome", "Overcame", "Overcome", "Vencer"),
        array("Pay", "Paid", "Paid", "Pagar"),
        array("Put", "Put", "Put", "Poner"),
        array("Read", "Read", "Read", "Leer"),
        array("Ride", "Rode", "Ridden", "Montar"),
        array("Ring", "Rang", "Rung", "Llamar"),
        array("Rise", "Rose", "Risen", "Levantarse"),
        array("Run", "Ran", "Run", "Correr"),
        array("Say", "Said", "Said", "Decir"),
        array("See", "Saw", "Seen", "Ver"),
        array("Seek", "Sought", "Sought", "Buscar"),
        array("Sell", "Sold", "Sold", "Vender"),
        array("Send", "Sent", "Sent", "Enviar"),
        array("Set", "Set", "Set", "Poner(se)"),
        array("Sew", "Sewed", "Sewed / Sewn", "Coser"),
        array("Shake", "Shook", "Shaken", "Sacudir"),
        array("Shear", "Shore", "Shorn", "Esquilar"),
        array("Shine", "Shone", "Shone", "Brillar"),
        array("Shoot", "Shot", "Shot", "Disparar"),
        array("Show", "Showed", "Shown", "Mostrar"),
        array("Shrink", "Shrank", "Shrunk", "Encogerse"),
        array("Shut", "Shut", "Shut", "Cerrar"),
        array("Sing", "Sang", "Sung", "Cantar"),
        array("Sink", "Sank", "Sunk", "Hundir"),
        array("Sit", "Sat", "Sat", "Sentarse"),
        array("Sleep", "Slept", "Slept", "Dormir"),
        array("Slide", "Slid", "Slid", "Resbalar"),
        array("Smell", "Smelt", "Smelt", "Oler"),
        array("Sow", "Sowed", "Sowed / Sown", "Sembrar"),
        array("Speak", "Spoke", "Spoken", "Hablar"),
        array("Speed", "Sped", "Sped", "Acelerar"),
        array("Spell", "Spelt", "Spelt", "Deletrear"),
        array("Spend", "Spent", "Spent", "Gastar"),
        array("Spill", "Spilt / Spilled", "Spilt / Spilled", "Derramar"),
        array("Spin", "Spun", "Spun", "Hilar"),
        array("Spit", "Spat", "Spat", "Escupir"),
        array("Split", "Split", "Split", "Hender / partir / rajar"),
        array("Spoil", "Spoilt / Spoiled", "Spoilt / Spoiled", "Estropear"),
        array("Spread", "Spread", "Spread", "Extender"),
        array("Spring", "Sprang", "Sprung", "Saltar"),
        array("Stand", "Stood", "Stood", "Estar en pie"),
        array("Steal", "Stole", "Stolen", "Robar"),
        array("Stick", "Stuck", "Stuck", "Pegar Engomar"),
        array("Sting", "Stung", "Stung", "Picar"),
        array("Stink", "Stank/Stunk", "Stunk", "Apestar"),
        array("Stride", "Strode", "Stridden", "Dar zancadas"),
        array("Strike", "Struck", "Struck", "Golpear"),
        array("Swear", "Swore", "Sworn", "Jurar"),
        array("Sweat", "Sweat", "Sweat", "Sudar"),
        array("Sweep", "Swept", "Swept", "Barrer"),
        array("Swell", "Swelled", "Swollen", "Hinchar"),
        array("Swim", "Swam", "Swum", "Nadar"),
        array("Swing", "Swung", "Swung", "Columpiarse"),
        array("Take", "Took", "Taken", "Coger"),
        array("Teach", "Taught", "Taught", "Enseñar"),
        array("Tear", "Tore", "Torn", "Rasgar"),
        array("Tell", "Told", "Told", "Decir"),
        array("Think", "Thought", "Thought", "Pensar"),
        array("Throw", "Threw", "Thrown", "Arrojar"),
        array("Thrust", "Thrust", "Thrust", "Introducir"),
        array("Tread", "Trod", "Trodden", "Pisar"),
        array("Understand", "Understood", "Understood", "Entender"),
        array("Undergo", "Underwent", "Undergone", "Sufrir"),
        array("Undertake", "Undertook", "Undertaken", "Emprender"),
        array("Wake", "Woke", "Woken", "Despertarse"),
        array("Wear", "Wore", "Worn", "Llevar puesto"),
        array("Weave", "Wove", "Woven", "Tejer"),
        array("Weep", "Wept", "Wept", "Llorar"),
        array("Wet", "Wet", "Wet", "Mojar"),
        array("Win", "Won", "Won", "Ganar"),
        array("Wind", "Wound", "Wound", "Enrollar"),
        array("Withdraw", "Withdrew", "Withdrawn", "Retirarse"),
        array("Wring", "Wrung", "Wrung", "Torcer"),
        array("Write", "Wrote", "Written", "Escribir")
    );
    $number_verbs = $_POST['number_verbs'];
    echo $number_verbs; 
    echo "<br>";
    $difficulty = $_POST['difficulty'];
    echo $difficulty;
    $length = count($verbList);
    if (!isset($_SESSION['random_verbs_list'])) {
        // Si no hay números aleatorios almacenados, genera nuevos índices aleatorios
        $random_verbs_list = [];
    
        for ($i = 0; $i < $number_verbs; $i++) {
            $random_verbs_list[] = $verbList[random_int(0, $length - 1)];
            switch ($difficulty) {
                case 1:
                    $random_verbs_list[$i][4] = array(1);
                    break;
                case 2:
                    $random_verbs_list[$i][4] = array(0, 2);
                    break;
                case 3:
                    $random_verbs_list[$i][4] = array(0, 1, 2);
                    break;
            }
        }

        $_SESSION['random_verbs_list'] = $random_verbs_list;
    } else {
        $random_verbs_list = $_SESSION['random_verbs_list'];
    }
    echo "<br>";
    echo count($random_verbs_list);
    echo "<table border='1'>";
    for ($i = 0; $i < $number_verbs; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 4; $j++) {
            echo "<td>" . $random_verbs_list[$i][$j] . "</td>";
        }
    }
}
