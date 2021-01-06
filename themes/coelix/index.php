<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coelix
 */

get_header();
?>

	<main id="primary" class="site-main">

	
	<section class="section-one">
		<div class="container">
			
			<div class="rectangle">
				<div class="stat">
					<div class="stat__item">
						<div class="stat__count">300</div>
						<div class="stat__text">ימים</div>
					</div>
					<div class="stat__item">
						<div class="stat__count">1</div>
						<div class="stat__text">שעות</div>
					</div>
					<div class="stat__item">
						<div class="stat__count">12</div>
						<div class="stat__text">דקות</div>
					</div>
					<div class="stat__item">
						<div class="stat__count">24</div>
						<div class="stat__text">שניות</div>
					</div>
				</div>
			</div>
			<div class="text-block">
				<div class="text-item-one">T<span>2</span>MED</div>
				<div class="text-item-two">סטארטאפ</div>
				<div class="text-item-three"> 3 ימים</div>
				<div class="text-item-four">2021 ץרמ ,24-26 </div>
				<div class="text-item-five">4הפקולטה לרפואה, טכניון</div>
			</div>
			<btn class="btn btn__login">כניסה</btn>
			<btn class="btn btn__apply"> T2MED-ל תודמעומ תשגה</btn>
		</div>	
	</section>
	
	
	<section class="section-two">
		<div class="container">
			<div class="img-one">
				<img src="http://t2med/wp-content/uploads/2021/01/rectangle.png" alt="">
				<div class="text-field">
					<div class="image-text-one"><span>ALARMI:</span> הזוכים משנה שעברה:</div>
					<div class="image-text-two">הדס ברוידא | שון היילברון דורון | נעה גולדברג | ולנטינה דה אמפייר | קמרון גורנזי</div>
				</div>
			</div>

				<!-- <btn class="btn btn__one"></btn>
				<btn class="btn btn__two"></btn>
				<btn class="btn btn__three"></btn>
				<btn class="btn btn__four"></btn>
				<btn class="btn btn__five"></btn> -->
			
			<div class="text-block">
				<div class="text-one">האקתון יזמות רפואית</div>
				<div class="text-two">לסטודנטים מכל התארים והפקולטות</div>
				<div class="text-three">.תויאופר תויעבל יקסעו יגולונכט ןורתיפ אוצמל הרטמב תוטלוקפו םימוחת ןווגממ תויטנדוטסו םיטנדוטס ושגפת T2MEDב
										.םיילאיצנטופ םישמתשמו תוחוקל ןייארל ,ינושאר סופיט-בא לע דובעל ,תיקסע תינכות תונבל ודמלת סנכה ךלהמב
										.לארשיב םיליבומה תואירבהו היישעתה יקפס ינפב ןהירצומו ןהיתונויער תא וגיצי תוצובקה לכ סנכה לש ןורחאה םויב
										תרחא תיאופר היעבב דקמתת הצובק לכ ;תוימוחת בר ,תונטק תוצובקב םייקתת סנכב תויטנדוטסהו םיטנדוטסה תדובע
										.לארשיב תיאופרה תומזיה םוחתב םיליבומ םירוטנממ תישיא תוכנוח לבקתו הצובקה ירבח ידי לע רחביתש</div>
			</div>
		</div>
	</section>

	</main>

<?php
get_sidebar();
get_footer();
