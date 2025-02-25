function generateRandomYear() {
    return rand(1930, 1950);
}

$pokas_count = 0;

echo "ЧЕГО СКАЗАТЬ-ТО ХОТЕЛ, МИЛОК?!\\n";

while (true) {
    $input = readline("> ");

    $is_yelling = (substr($input, -1) === '!');

    $is_bye = (strtoupper(trim($input)) === 'ПОКА!');


    if ($is_yelling) {
        if ($is_bye) {
            $pokas_count++;

            if ($pokas_count >= 3) {
                echo "ДО СВИДАНИЯ, МИЛЫЙ!\\n";
                break;
            } else {
                echo "НЕТ, НИ РАЗУ С " . generateRandomYear() . " ГОДА!\\n";
            }
        } else {
            echo "НЕТ, НИ РАЗУ С " . generateRandomYear() . " ГОДА!\\n";
            $pokas_count = 0;

        }

    } else {
        echo "АСЬ?! ГОВОРИ ГРОМЧЕ, ВНУЧЕК!\\n";
        $pokas_count = 0;

    }
}

?>