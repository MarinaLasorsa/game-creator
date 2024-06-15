<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = [
            [
                'name' => 'Cleric',
                'img-carosel' => 'resources/img/carosel/1.png',
                'img-m' => 'resources/img/players/1.png',
                'img-f' => 'resources/img/players/2.png',
                'description' => 'Incarnerai il fulcro tra il sacro e il terreno. Maestro delle arti curative e protettore divino, il Cleric è essenziale per mantenere il morale e la salute del tuo esercito al massimo. Utilizzando incantesimi di guarigione potenti e abilità di protezione, il Cleric non solo ripara le ferite dei tuoi guerrieri, ma rafforza anche le loro difese con benedizioni divine. La tua saggezza e la tua devozione possono ribaltare le sorti della battaglia, trasformando una disfatta imminente in una vittoria gloriosa. Sei pronto a guidare i tuoi alleati verso la luce?'
            ],
            [
                'name' => 'Wizard',
                'img-carosel' => 'resources/img/carosel/2.png',
                'img-m' => 'resources/img/players/3.png',
                'img-f' => 'resources/img/players/4.png',
                'description' => "Sarai l'arcano stratega del tuo esercito. Maestro degli incantesimi e delle arti occulte, il Wizard impiega una vasta gamma di magie devastanti per controllare il campo di battaglia. Evoca potenti elementi, manipola le forze della natura e lancia incantesimi che annientano i nemici a distanza. La tua conoscenza delle arti arcane permette di debilitare gli avversari e rafforzare i tuoi alleati con incantamenti potenti. Con mente acuta e poteri sovrannaturali, il Wizard è il pilastro dell’offensiva magica. Sei pronto a scatenare la tua magia e a cambiare le sorti della guerra?"
            ],
            [
                'name' => 'Warrior',
                'img-carosel' => 'resources/img/carosel/3.png',
                'img-m' => 'resources/img/players/5.png',
                'img-f' => 'resources/img/players/6.png',
                'description' => "sarai la forza bruta e il cuore pulsante del tuo esercito. Armato di spade possenti, scudi indistruttibili e un coraggio senza pari, il Warrior è in prima linea in ogni battaglia, affrontando nemici con una combinazione letale di forza fisica e abilità tattiche. La tua resistenza e il tuo addestramento ti rendono un combattente implacabile, capace di incassare colpi e rispondere con attacchi devastanti. Guidi i tuoi compagni con l'esempio, ispirando e proteggendo con il tuo spirito indomito. Sei pronto a impugnare le armi e a combattere per la gloria?"
            ],
            [
                'name' => 'Troll',
                'img-carosel' => 'resources/img/carosel/4.png',
                'img-m' => 'resources/img/players/7.png',
                'img-f' => 'resources/img/players/8.png',
                'description' => "incarnerai la potenza selvaggia e primordiale. Con la tua stazza imponente e forza brutale, il Troll è una macchina da guerra inarrestabile, capace di seminare il caos tra le fila nemiche. Dotato di un'incredibile capacità di rigenerazione, ti rialzi rapidamente dopo ogni colpo, rendendoti un avversario formidabile da abbattere. La tua connessione con la natura ti permette di sfruttare il terreno a tuo vantaggio, tendendo imboscate mortali e utilizzando abilità uniche per sorprendere i nemici. Sei pronto a scatenare la furia della natura e a conquistare le Terre Selvagge con la tua forza devastante?"
            ],
            [
                'name' => 'Elf',
                'img-carosel' => 'resources/img/carosel/5.png',
                'img-m' => 'resources/img/players/9.png',
                'img-f' => 'resources/img/players/10.png',
                'description' => "Sarai l'incarnazione dell'agilità, della precisione e della grazia. Maestro nell'uso dell'arco e delle lame leggere, l'Elf eccelle nelle tattiche di guerriglia, colpendo con letale accuratezza e svanendo nell'ombra. La tua connessione innata con la natura ti permette di muoverti silenziosamente attraverso i boschi, tendere imboscate perfette e sfruttare l'ambiente per confondere e sconfiggere i tuoi avversari. Con sensi acuti e una velocità fulminea, il tuo ruolo è quello di ricognitore e assassino, sempre un passo avanti al nemico. Sei pronto a dimostrare la tua destrezza e a difendere la tua terra con l'abilità e l'eleganza degli Elfi?"
            ],
            [
                'name' => 'Human',
                'img-carosel' => 'resources/img/carosel/6.png',
                'img-m' => 'resources/img/players/11.png',
                'img-f' => 'resources/img/players/12.png',
                'description' => "Rappresenterai la versatilità e la resilienza. Abile sia nel combattimento corpo a corpo che a distanza, l'Human è un combattente equilibrato, capace di adattarsi a diverse situazioni con rapidità. La tua innata capacità di leadership ti permette di coordinare efficacemente le forze alleate, ispirando e rafforzando il morale delle truppe. Con un'ampia gamma di abilità tattiche e strategiche, puoi specializzarti in vari ruoli, dal combattente feroce al comandante astuto. Sei pronto a sfruttare al massimo il tuo potenziale umano e a guidare il tuo esercito verso la vittoria con ingegno e determinazione?"
            ],
            [
                'name' => 'Druid',
                'img-carosel' => 'resources/img/carosel/7.png',
                'img-m' => 'resources/img/players/13.png',
                'img-f' => 'resources/img/players/14.png',
                'description' => "Sarai il custode della natura e il maestro della metamorfosi. Con la tua profonda connessione con il mondo naturale, il Druid può evocare potenti incantesimi che manipolano gli elementi, curare gli alleati e affliggere i nemici con forze selvagge. La tua abilità unica di trasformarti in varie forme animali ti consente di adattarti a qualsiasi situazione: da possenti bestie da combattimento a creature agili per l’esplorazione. Come Druid, proteggi l'equilibrio della natura e sfrutti il potere della terra per difendere le Terre Selvagge. Sei pronto a evocare le forze primordiali e a combattere per la tua terra con la potenza e la saggezza della natura?"
            ],
            [
                'name' => 'Hunter',
                'img-carosel' => 'resources/img/carosel/8.png',
                'img-m' => 'resources/img/players/15.png',
                'img-f' => 'resources/img/players/16.png',
                'description' => "sarai il predatore silenzioso e letale. Maestro dell'arco e delle trappole, il Hunter eccelle nell'arte dell'inseguimento e dell'imboscata, colpendo i nemici da lontano con precisione mortale. Accompagnato da un fidato compagno animale, il Hunter sfrutta la simbiosi con la natura per individuare e neutralizzare le minacce prima che possano avvicinarsi. La tua conoscenza del territorio ti permette di muoverti furtivamente e di trasformare l'ambiente circostante in una trappola mortale per i tuoi avversari. Sei pronto a padroneggiare l'arte della caccia e a difendere le Terre Selvagge con astuzia e precisione infallibile?"
            ],
            [
                'name' => 'Monk',
                'img-carosel' => 'resources/img/carosel/9.png',
                'img-m' => 'resources/img/players/17.png',
                'img-f' => 'resources/img/players/18.png',
                'description' => "incarnerai la disciplina, la spiritualità e la maestria nelle arti marziali. Addestrato in templi nascosti e fortezze remote, il Monk combina una forza fisica straordinaria con una mente zen. Con una padronanza del combattimento a mani nude e delle armi tradizionali, puoi sferrare colpi rapidi e precisi, immobilizzare i nemici e proteggere i tuoi alleati con movimenti fluidi e letali. La tua connessione con le energie interiori ti consente di canalizzare poteri mistici per guarire, proteggere e infliggere danni devastanti. Sei pronto a dimostrare il potere della tua disciplina e a portare armonia nelle Terre Selvagge con la saggezza e la forza di un vero Monk?"
            ],

        ];

        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->name = $type['name'];
            $new_type->img_carosel = $type['img-carosel'];
            $new_type->img_m = $type['img-m'];
            $new_type->img_f = $type['img-f'];
            $new_type->description = $type['description'];

            $new_type->save();
        }
    }
}
