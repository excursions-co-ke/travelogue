<?php

/**
 * @package travelogue
 * @version 1.2.3
 */
/*
Plugin Name: Travelogue
Plugin URI: https://wp.excursions.co.ke/plugins/travelogue
Description: Random Travel Taglines
Author: Excursions Kenya
Version: 1.20.04
Author URI: http://excursions.co.ke/
*/
function get_taglines()
{

    /** These are the taglines to Excursion Kenya */
    $taglines = "A more rewarding way to travel.
        A symbol of freedom.
        A world to see.
        Adventure awaits, go find it.
        Adventure is out there.
        Adventure is worthwhile.
        All aboard for abroad!
        Ameristar. More casino. More fun.
        Answer it Royally.
        Be an adventurer.
        Book a ticket and just leave.
        Book with us and book it out of here!
        Casino Pauma. The players oasis.
        Catch our smile.
        Commit to travel.
        Delta gets you there. We’re ready to fly.
        Delta is ready when you are.
        Don’t just book it. Thomas Cook it.
        Don’t be a tourist, be a traveler.
        Don’t forget to travel.
        Don’t listen to what they say, Go see.
        Dream. Explore. Discover.
        Eat less, Travel more.
        Eat well Travel often.
        Escape life for a little while.
        Escape the ordinary.
        Everything for travel.
        Experience the excitement!
        Experience. Tourism. These are as education in themselves.
        Feed your wanderlust.
        Fill those passport pages.
        Find your escape.
        Fly like a CEO, pay like a temp.
        Fly the American way.
        Fly the friendly skies.
        Fuel your soul with travel.
        Get out there.
        Get with us and get away.
        Go and see all you possibly can.
        Go somewhere.
        Go where you feel the most alive.
        Golden Eagle. Go where the winners go!
        Grab fun with travel.
        Happiness is traveling.
        Harrah’s, oh yeah!
        Have a safe trip.
        Head in the clouds.
        Holidays at home are great.
        I love New York.
        IP is the place to be!
        Is this any way to run an airline? – You bet it is!
        It is not down in any map; true places never are.
        It pays to fly…
        It’s about the journey.
        It’s all here!
        It’s all right here.
        It’s time to fly.
        It’s a big world out there, go explore.
        It’s time to get away.
        Kick your feet up and go.
        Leave the driving to us.
        Let us be your passport to the world.
        Let’s go on an adventure.
        Life begins at the end of your comfort zone.
        Life changing.
        Life is an adventure.
        Life is short. Book the flight.
        Light is faster, but we are safer.
        Live today. Tomorrow will cost more.
        Making the sky the best place on earth.
        MGM means great movies.
        Normandie Casino. Where players win.
        Not all those who wander are lost.
        Not all who wander are lost.
        Outwit. Outplay. Outlast.
        Par-A-Dice. The friendliest casino on the water.
        Pleasing people the world over.
        Remember to Explore.
        Rest, keep warm and drink liquids.
        Rhythm City. Where a good time lasts a long time!
        Sandia Casino. The place to play!
        Sandy beaches to snowy peaks.
        Say yes to new adventures.
        Singapore girl, you’re a great way to fly.
        So many ways to play!
        Solving all your travel troubles.
        Something special in the air.
        Stress Less, Travel More.
        The antidote for civilization.
        The best way to get away.
        The finest in travel.
        The fool wanders, a wise man travels.
        The happiest place on earth.
        The proud bird with the golden tail.
        The sky’s the limit!
        The way to fly.
        The wonder of it all.
        The world is too big to leave unexplored.
        The world is waiting.
        The world is yours to explore.
        The world’s favourite airline.
        They have just one mission…yours.
        Time to fly.
        Time to see the world.
        To travel is to live.
        Tourism. Education For The Mind & Education For The Heart.
        Travel does the heart good.
        Travel far. Eat well. Live long.
        Travel is the healthiest addiction.
        Travel makes a wise man better, and a fool worse.
        Travel more to discover yourself.
        Travel more, create more memories.
        Travel the world.
        Travel to live, Live to travel.
        Travel to make memories all around the world.
        Travel to meet yourself.
        Travel with excellence.
        Traveling makes a man wiser, but less happy.
        Twin Pine. Your roto riches!
        Virgin Atlantic, more experience than our name suggests.
        Virginia is for lovers.
        Wander. Explore. Discover.
        We bet you’ll love it.
        We know where you’re going…
        We love to fly and it shows.
        We really move our tail for you.
        We treat you like Royalty!
        We’ll get you there.
        We’ll show you the world.
        We’ll take more care of you.
        We’re American Airlines, doing what we do best.
        We’re National, the sunshine airline. Watch us shine.
        We’re here to get you there.
        Western Airlines the only way to fly.
        What happens here, stays here.
        What’s your Grand Casino story?
        Wheels up!
        When in doubt, travel.
        When you’ve got it, flaunt it.
        Where friendship is the largest jackpot!
        Where The Winners Play.
        Where you book matters.
        Work hard, fly right.
        World class, worldwide.
        You are now free to move about the country.
        You don’t have to be rich to travel well.
        You’ll love the way we fly.
        You’re going to like us.
        You’ve Arrived.
        Your travel buddies.
        A Destination for the New Millennium.
        A different light.
        A new point of view.
        A signature of excellence.
        A tradition of excellence.
        A whole world on a single island.
        A world within. A state apart.
        Adventures In Living.
        Awaken To A Different World.
        Beautiful one day, perfect the next.
        Beauty Amplified.
        Best under the Australian sky.
        Better prices. Exceptional people.
        Beyond Words.
        Big agency deals. Small agency feel.
        Big Country.
        Come to Life.
        Creative Holidays. Create your kind of holiday.
        Discover a different world…
        Dream Big.
        Dream. Explore. Discover.
        Dreams for all seasons.
        Eat, drink, and be happy. Ride the rails!
        Endless Discoveries.
        Enjoy the freedom!
        Enjoy the show.
        Escape completely.
        Eternally Yours.
        Even better this year.
        Every day is different.
        Everything else is in the shade.
        Exclusive holidays for the single traveler.
        Experience the uncommon element.
        Experience Variety.
        Explore Minnesota.
        Exploring the world in comfort.
        Fields of Opportunities.
        Forever West.
        Georgia on my mind.
        Get Lost.
        Get natural.
        God’s own country.
        Great Faces. Great Places.
        Great journeys – fascinating places.
        Happiness on Earth.
        Honest To Goodness Indiana.
        I (Heart) NY.
        Inspiring destinations within your reach.
        It’s a real pleasure.
        It’s all here.
        It’s Like A Whole Other Country
        It’s more fun in the Philippines.
        Journey at its luxurious best.
        Journeys as great as the destinations.
        Just a Smile Away.
        Let us show you the world!
        Let your soul and spirit fly.
        Life Elevated.
        Live Free & _________.
        Live your myth in Greece.
        Made in Tennessee.
        Manly. Seven Miles from Sydney, a Thousand Miles from Care…
        Mile after magnificent mile.
        More than the usual.
        Must be the sunshine.
        New Mexico True.
        Oceans of experience.
        One aim, excellence.
        Pick Your Passion.
        Positively Transforming.
        Rail trips to here, there and everywhere!
        Relax… You’re with us! We make it simple.
        Relaxed, friendly and informal.
        State of Independence.
        Still Revolutionary.
        Sweet Home Alabama
        Take me to the top.
        The best way to see America!
        The Grand Canyon State.
        The Heartland of the Baltic.
        The Island for All Seasons.
        The Island of Memories…
        The Land that Sings.
        The Mediterranean as it once was.
        The Natural State.
        The value of experience.
        There is no place like Kansas.
        There’s no place like it.
        There’s only one.
        Too much fun for just one day.
        Travel with a clear conscience.
        Ultimate in Diversity.
        Unbridled Spirit.
        Unforgettable rail journeys.
        Virginia is for lovers.
        We live it. You’ll love it.
        We Love Dreamers.
        Where family fun begins.
        You’ll love where we take you.
        You’ve arrived.
        Your world. Your way.";

    // Here we split it into lines.
    return explode("\n", $taglines);
}

function travelogue_get_tagline()
{
    $taglines = get_taglines();
    // And then randomly choose a line.
    return wptexturize($taglines[mt_rand(0, count($taglines) - 1)]);
}

// This just echoes the chosen line, we'll position it later.
function travelogue()
{
    $chosen = travelogue_get_tagline();
    $lang   = '';
    if ('en_' !== substr(get_user_locale(), 0, 3)) {
        $lang = ' lang="en"';
    }

    printf(
        '<p id="excursion"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
        __('Heya! '),
        $lang,
        $chosen
    );
}

add_action('wp_footer', 'travelogue_toast');
function travelogue_toast()
{
    $taglines = json_encode(get_taglines());

    echo <<<SCRIPT
    <script>
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }

        var tags = $taglines;
        var i = getRandomInt(0, tags.length);
        toastr.info(tags[i]);
    </script>
SCRIPT;
}

// Now we set that function up to execute when the admin_notices action is called.
add_action('admin_notices', 'travelogue');

// We need some CSS to position the paragraph.
function excursion_css()
{
    echo "
	<style type='text/css'>
	#excursion {
		float: right;
		padding: 30px 20px;
		margin: 0;
		font-size: 15px;
		line-height: 1.6666;
	}
	.rtl #excursion {
		float: left;
	}
	.block-editor-page #excursion {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#excursion,
		.rtl #excursion {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
    }
	</style>
	";
}
add_action('admin_head', 'excursion_css');

function add_theme_scripts()
{
    wp_enqueue_script("toastr", "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js", ['jquery'], time());
    wp_enqueue_style("toastr", "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css");
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');