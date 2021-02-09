<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'bookPicture' => 'https://images-na.ssl-images-amazon.com/images/I/91dR5VlLTVL.jpg',
            'title' => 'The Lord of the Rings: The Fellowship of the Ring',
            'autor' => 'beastnikolov',
            'genre' => 'Fantasy',
            'publisher' => 'PublishMaxx',
            'content' => "In the Second Age of Middle-earth, the lords of Elves, Dwarves, and Men are given Rings of Power. Unbeknownst to them, the Dark Lord Sauron forges the One Ring in Mount Doom, instilling into it a great part of his power, in order to dominate the other Rings so he might conquer Middle-earth. A final alliance of Men and Elves battles Sauron's forces in Mordor. Isildur of Gondor severs Sauron's finger and the Ring with it, thereby vanquishing Sauron and returning him to spirit form. With Sauron's first defeat, the Third Age of Middle-earth begins. The Ring's influence corrupts Isildur, who takes it for himself. Isildur is later killed by Orcs and the Ring is lost in a river for 2,500 years until it is found by Gollum, who owns it for five centuries. The Ring is then found by a hobbit named Bilbo Baggins, who is unaware of its history",
            'publishDate' => date('Y-m-d h:i:s', time()),
            'price' => 15.00
        ]);

        DB::table('books')->insert([
            'bookPicture' => 'https://images-na.ssl-images-amazon.com/images/I/51Z2fq6O5EL.jpg',
            'title' => 'Star Wars: A New Dawn',
            'autor' => 'beastnikolov',
            'genre' => 'Science-fiction',
            'publisher' => 'EAPublish',
            'content' => "For a thousand generations, the Jedi Knights brought peace and order
            to the Galactic Republic, aided by their connection to the mystical en-
            ergy field known as the Force. But they were betrayed—and the whole
            galaxy has paid the price. It is the Age of the Empire.
            
            Now Emperor Palpatine, once chancellor of the Republic and se-
            cretly a Sith follower of the dark side of the Force, has brought his own
            peace and order to the galaxy. Peace, through brutal repression—and
            order, through increasing control of his subjects' lives.
            
            But even as the Emperor tightens his iron grip, others have begun to
            question his means and motives. And still others, whose lives were de-
            stroyed by Palpatine's machinations, lay scattered about the galaxy like
            unexploded bombs, waiting to go off....",
            'publishDate' => date('Y-m-d h:i:s', time()),
            'price' => 15.00
        ]);

        DB::table('books')->insert([
            'bookPicture' => 'https://upload.wikimedia.org/wikipedia/en/7/70/Harry_Potter_and_the_Order_of_the_Phoenix.jpg',
            'title' => 'Harry Potter and the Order of the Phoenix',
            'autor' => 'beastnikolov',
            'genre' => 'Fantasy',
            'publisher' => 'MagiPublish',
            'content' => "During the summer, Harry Potter and his cousin Dudley are attacked by Dementors. Forced to use magic to fend them off, Harry is expelled from Hogwarts, but his expulsion is postponed pending a hearing at the Ministry of Magic. Harry is whisked off to Number 12, Grimmauld Place, the childhood home of Sirius Black, by a group of wizards belonging to the Order of the Phoenix.
            Ron Weasley and Hermione Granger explain that the Order is a secret organisation led by Hogwarts headmaster Albus Dumbledore, dedicated to fighting Lord Voldemort and the Death Eaters. Harry, Ron, Hermione, Ginny Weasley and Fred and George Weasley learn that Voldemort is seeking something he lacked prior to his defeat. The Ministry, led by Cornelius Fudge, refuses to accept Voldemort's return, and are running a smear campaign against Harry and Dumbledore. At the hearing, Dumbledore defends Harry, who is cleared of all charges.",
            'publishDate' => date('Y-m-d h:i:s', time()),
            'price' => 20.00
        ]);

        DB::table('books')->insert([
            'bookPicture' => 'https://upload.wikimedia.org/wikipedia/en/a/a9/Harry_Potter_and_the_Deathly_Hallows.jpg',
            'title' => 'Harry Potter and the Deathly Hallows',
            'autor' => 'beastnikolov',
            'genre' => 'Fantasy',
            'publisher' => 'MagiPublish',
            'content' => "Following Dumbledore's death, Voldemort is attempting to take control of the Ministry of Magic. Meanwhile, Harry is about to turn seventeen, and lose the protection from his mother. Members of the Order of the Phoenix relocate the Dursleys, and prepare to move Harry to the Burrow, by flying him there, using Harry's friends as decoys. Death Eaters attack them upon departure, and in the ensuing battle, 'Mad-Eye' Moody and Hedwig are killed and George Weasley's ear is cursed off by Snape. Voldemort arrives to kill Harry, but Harry's wand fends him off on its own.",
            'publishDate' => date('Y-m-d h:i:s', time()),
            'price' => 15.00
        ]);

        DB::table('books')->insert([
            'bookPicture' => 'https://upload.wikimedia.org/wikipedia/en/6/6b/DaVinciCode.jpg',
            'title' => 'The Da Vinci Code',
            'autor' => 'beastnikolov',
            'genre' => 'Mystery',
            'publisher' => 'MagiPublish',
            'content' => "Louvre curator and Priory of Sion grand master Jacques Saunière is fatally shot one night at the museum by an albino Catholic monk named Silas, who is working on behalf of someone he knows only as the Teacher, who wishes to discover the location of the keystone an item crucial in the search for the Holy Grail. After Saunière's body is discovered in the pose of the Vitruvian Man by Leonardo da Vinci, the police summon Harvard professor Robert Langdon, who is in town on business. Police captain Bezu Fache tells him that he was summoned to help the police decode the cryptic message Saunière left during the final minutes of his life. The message includes a Fibonacci sequence out of order. Langdon explains to Fache that Saunière was a leading authority on the subject of goddess artwork and that the pentacle Saunière drew on his chest in his own blood represents an allusion to the goddess and not devil worship, as Fache believes.",
            'publishDate' => date('Y-m-d h:i:s', time()),
            'price' => 27.50
        ]);

        DB::table('books')->insert([
            'bookPicture' => 'https://upload.wikimedia.org/wikipedia/en/6/62/Kite_runner.jpg',
            'title' => 'The Kite Runner',
            'autor' => 'beastnikolov',
            'genre' => 'Drama',
            'publisher' => 'XDPublish',
            'content' => "Amir, a well-to-do Pashtun boy, and Hassan, a Hazara boy who is the son of Ali, Amir's father's servant, spend their days kite fighting in the hitherto peaceful city of Kabul. Flying kites was a way to escape the horrific reality the two boys were living in. Hassan is a successful 'kite runner' for Amir; he knows where the kite will land without watching it. Both boys are motherless: Amir's mother died in childbirth, while Hassan's mother, Sanaubar, simply abandoned him and Ali. Amir's father, a wealthy merchant Amir affectionately refers to as Baba, loves both boys. He makes a point of buying Hassan exactly the same things as Amir, to Amir's annoyance. He even pays to have Hassan's cleft lip surgically corrected. On the other hand, Baba is often critical of Amir, considering him weak and lacking in courage, even threatening to physically punish him when he complains about Hassan. Amir finds a kinder fatherly figure in Rahim Khan, Baba's closest friend, who understands him and supports his interest in writing, whereas Baba considers that interest to be worthy only of females. In a rare moment, when Amir is sitting on Baba's lap rather than being shooed away as a bother, he asks why his father drinks alcohol which is forbidden by Islam. Baba tells him that the Mullahs are hypocrites and the only real sin is theft which takes many forms",
            'publishDate' => date('Y-m-d h:i:s', time()),
            'price' => 19.50
        ]);
    }
}
