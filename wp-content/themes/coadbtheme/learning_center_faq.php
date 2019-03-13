<?php
/*Template Name: Faq*/
 get_header('sub');
?>

<!--Page Main content Start Here -->
		<div class="page-wrap">
			<!-- Banner Starts Here -->
			<div class="faq-main" id="searchBar">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
							<div class="search-inner">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
										<form>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Type your surname here">
												<span class="input-group-btn">
													<a type="button" class="btn btn-default" href="./surname_listing.html"><i class="fa fa-search"></i></a>
												</span>
											</div>
										</form>
									</div>
								</div>
                                <h1>FAQ</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- Banner Ends Here -->
<!-- tab Starts Here -->
			<section class="tab-section">
			  <div class="container">
			    <div class="row">
                    <?php 
                        $args = array(
                                'theme_location' => 'other',
                                'container' => 'div', // parent container 
                                'container_class' => 'row', //parent container ID
                                'depth' => 2,
                                'items_wrap' => '%3$s', // removes ul
                                'walker' => new Learning_Description_Walker // custom walker to replace li with div
                        );
                    ?>
                    <?php wp_nav_menu( $args ); ?>
                </div>
			  </div>
			</section>
<!-- tab end Here -->
<!-- Leave A Comment section Starts Here --> 
<section class="space faq-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                <div class="panel-group" id="accordion">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                                    the_content();
                                    endwhile; else: ?>
                                    <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                    <h2 class="heading">Coat of Arms/Heraldry</h2>
                    
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">What is a coat of arms?</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Coats of arms were developed as a means of distinguishing oneself on the battlefield during medieval times. They were used so a person could tell the difference between friend and foe. This was often necessary when men were covered in chain mail or armor, making them hard to identify.
                                <br>
                                When coats of arms were developed and adopted by society, most people in Europe were illiterate. Therefore, bold designs were much easier to recognize.
                                <br>
                                Men would paint or embroider their shields and tunics with symbols such as eagles, lions, crosses, roses, etc.
                                <br>
                                The average foot soldier’s ability to know what was happening around him was limited to who, and or what he could see in front of him, and to either side. In the melee of fog and battle, it was easy to become disoriented and confused. History is full of stories of friends and allies turning on each other by mistake, as their personal equipment looked exactly like those they opposed.
                                <br>
                                In later times, knights would attach symbols to the top of great helms that they wore during tournaments (mainly). These symbols would eventually become known as crests. [11] [12]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">What does Heraldry mean?</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                her·ald·ry from Old French “hiraudie”.
                                <br>
                                Heraldry is the system by which coats of arms and other armorial bearings are devised, described, and regulated.
                                <br>
                                Heraldry is both a science and an art that deals with the use, display, and regulation of hereditary symbols employed to distinguish individuals, armies, institutions, and corporations. Those symbols, which originated as identification devices on flags and shields, are called armorial bearings. [13]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">When did people start using coats of arms?</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                When heraldry first developed in Europe during the Middle Ages, arms belonged to individuals and not families or surnames.
                                <br>
                                Heraldry was used in medieval tournaments of the 12th and 13th centuries AD. These tournaments were mock battles whereupon knights practiced their skill and training for war. By around 1300 AD and beyond, the tournaments became more about social standing and fashion. Events included jousting and melees. A knight would depict his arms on a tunic or surcoat worn over his armor. During this time, clothing fashion became influenced by heraldry.
                                <br>
                                Every knight and or lord would have their coat of arms or a badge which represented them sewn, painted or embroidered on their clothing, pavilions and personal property. Even their hounds’ collars would have their arms portrayed on them.
                                <br>
                                By the 1500s, coats of arms became associated with nobility, aristocracy, and landed gentry.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">What is the difference between a family crest and coat of arms?</a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                Technically, there is no difference between a family crest and a coat of arms. However, there is an informal difference with the crest referring to what is displayed on top of the helmet while a coat of arms refers to the shield.
                                <br>
                                COADB.com and many sites that discuss the family crest and coats of arms choose to use the terms interchangeably in content because that’s how many people know and will search for the term.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Who received a coat of arms?</a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                                In the earliest days, coats of arms were granted to military men and close advisors to the king. Later on MPs, lawyers and administrators were awarded arms and titles. As the golden periods of English history approached in the 18th and 19th century, the attitude to arms had changed. Those who didn’t have a coat of arms made it their business to get one.
                                <ul>
                                    <li>
                                        Church officials
                                        <ul>
                                            <li>Archbishops</li>
                                            <li>Bishops</li>
                                            <li>Cardinals</li>
                                        </ul>
                                    </li>
                                    <li>Knights</li>
                                    <li>Landed gentry (social class of landowners who earned a living through rental income, or had a country estate)</li>
                                    <li>Military (general, admiral, captain, colonel) if they distinguished themselves for bravery or won important battle of historical significance</li>
                                    <li>Nobles (dukes, marquis, earls, viscount barons)</li>
                                    <li>Royalty (kings, queens, princesses, princess) [11]</li>
                                </ul>
                                Many of the knights may not have been of fighting age, but held land and controlled the peasantry. They were the main providers of tax, and it was they who provided the soldiers for the king’s armies. Their descendants still own considerable property in England, as do many members of the old aristocracy.
                                <br>
                                The military, advisors, MPs, etc. were joined by businessmen and members of professions like doctors, and because the large industrial cities had become very important, mayors of boroughs were added to the list.
                                <br>
                                It was only within the last 100 years or so that a coat of arms was a cool thing to buy, display, and learn about if your ancestors owned one.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Did having a coat of arms mean you were noble?</a>
                            </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <div class="panel-body">
                                Receiving a coat of arms did not necessarily mean you were noble.
                                <br>
                                In England, a grant of arms is not a noble guarantee of itself. Instead, it is recognition of rank or status and, therefore, an authoritative confirmation of it.
                                <br>
                                Typically, nobility was conferred on individuals who had assisted the sovereign who degenerated into the buying of patents of nobility, whereby rich commoners (e.g., merchants) could purchase a title of nobility. [11]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">How were coats of arms inherited?</a>
                            </h4>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                            <div class="panel-body">
                                Most of the time, the arms were passed down to the eldest son of the family. As this process occurred generation after generation, people began referring to the coat of arms as “family crest”, since certain designs became associated with certain surnames. Sharing the same surname is not necessarily indicative of descent.
                                <br>
                                The traditions and processes of how a family crest or coat of arms is passed down can also;
                                <ul>
                                    <li>Differ by country</li>
                                    <li>Commonly passed to first born son</li>
                                    <li>Believed that a coat of arms is an ancestral right with only being born by virtue. Ancestral right means descent in the male line from an ancestor who lawfully bore arms</li>
                                    <li>Grant made to the user under due authority by Crown or the State [11]</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Why are there so many different coats of arms for the same surname?</a>
                            </h4>
                        </div>
                        <div id="collapse8" class="panel-collapse collapse">
                            <div class="panel-body">
                                When heraldry and coats of arms began, they belonged to families, not individuals. Some surnames have multiple coats of arms, even hundreds.
                                <br>
                                If we think about common day surnames and in genealogy research, we know that people who share the same surname may not be related, either genetically or through marriage. This same concept holds true when looking at multiple coats of arms listed under a single surname.
                                <br>
                                To determine if you are a descendant of one of the men or women who bore a coat of arms (known as armigers), the starting point would be to trace your family tree back into history as far as you can. Should you be lucky enough to get back far enough, it is possible, although not guaranteed, you may find a relation to an armiger.
                                <br>
                                However, it’s perfectly acceptable to display a coat of arms granted to someone with whom you share the same surname. That being said, it is suggested arms not be used on any official legal documents or papers.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">What were coats of arms used for?</a>
                            </h4>
                        </div>
                        <div id="collapse9" class="panel-collapse collapse">
                            <div class="panel-body">
                                Although it is believed that the original function of coats of arms was to enable knights to identify each other on the battlefield, they soon acquired wider, more decorative and even legal uses.
                                <br>
                                In civilian life and general society, coats of arms were used to letters and legal documents official and could often be found on a person’s property (house, business, castle, estate).
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">For what reasons were coat of arms granted? Who could receive one a why?</a>
                            </h4>
                        </div>
                        <div id="collapse10" class="panel-collapse collapse">
                            <div class="panel-body">
                                Early arms were granted to knights and other military figures. In the earliest days, knight and barons would design and bear arms without asking anyone’s permission. Gradually, advisors to the sovereign and people who held important government posts were awarded a coat of arms.
                                <br>
                                There is no official widespread regulation on coats of Arms. However, the art, science, tradition and rules of heraldry has remained consistent across Europe
                                <br>
                                In countries such as England and Scotland there are some heraldic authorities such as the College of Arms, established in 1484, which grants and regulates arms.
                                <br>
                                For any person to have a right to a coat of arms, they must either have had it granted in their community as you don’t have to be noble to receive a coat of arms, just to be of good standing. If the College of Arms accepted a person, they were in.
                                <br>
                                A person also needed to be a confirmed descendant from a male (paternal) line from a person to whom arms were granted originally to inherit their family’s coat of arms. [11] [12] [13]
                                <ol>
                                    <li>A gift from the king for a soldier’s loyalty or performance in battle.</li>
                                    <li>William Shakespeare was given a coat of arms for being a successful writer and actor. His father originally petitioned for a coat of arms which was never successfully processed. After his death, William had reopened the original request from his father. His family’s coat of arms wasn’t without controversy as being an actor was not deemed a notable profession. [5]</li>
                                    <li>Sir Isaac Newton was granted knighthood and a coat of arms for his extraordinary work in physics. [15]</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">Did women own coats of arms?</a>
                            </h4>
                        </div>
                        <div id="collapse11" class="panel-collapse collapse">
                            <div class="panel-body">
                                Even in the Middle Ages, women who typically didn’t have many rights, women identified with their own coat of arms. However, unlike the men, they did not use them for battle or military purposes. They were more for social and public use.
                                <br>
                                In general, arms of women were most likely depicted not on shields but on lonzeges (small crest or shield) or ovals.
                                <br>
                                Rules existed that depended on the woman’s marital status. Married women would often use their husband’s coat of arms with a combination of the one that belonged to her own family.
                                <br>
                                The rules for women and heraldry developed differently throughout Europe and there is no one single rule that applies everywhere.
                                <br>
                                In more current times, men and women are treated equally in terms of coats of arms and heraldic purposes in Canada. [24]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">What were the rules of inheritance for a woman?</a>
                            </h4>
                        </div>
                        <div id="collapse12" class="panel-collapse collapse">
                            <div class="panel-body">
                                A woman’s right to bear a coat of arms was through her father’s inheritance or a grant to herself.
                                <br>
                                A widowed woman would often continue to use the coat of arms of her late husband but with alternations to reflect his passing such as impaled arms. [24]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">What is a blazon?</a>
                            </h4>
                        </div>
                        <div id="collapse13" class="panel-collapse collapse">
                            <div class="panel-body">
                                From the French word blason, meaning “shield”, a blazon is the written technical description and specialized language in which a blazon is written of what a coat of arms looks like and describes or depicts the armorial bearings in the correct heraldic manner so the reader or artist can reconstruct the appropriate image.
                                <br>
                                For more information, please check out our online glossary of terms.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">What does my coat of arms mean? Do the symbols (charges) have meanings?</a>
                            </h4>
                        </div>
                        <div id="collapse14" class="panel-collapse collapse">
                            <div class="panel-body">
                                There are many elements that make up a coat of arms. Each element has a meaning. However, the meanings are an issue of controversy as meaning may have changed with time and are open to interpretation. Books were written by authors who documented the meanings of symbols but are considered today to be “Victorian invention” of the “romanticist era”.
                                <br>
                                It is very interesting to note that some coats of arms have legends and lore about how they came to be. An example of this explains how the Armstrong name has a mythological origin, in which their heroic progenitor, Fairbairn, saves the King of Scotland in battle by lifting the king onto his own horse with one arm after the king’s horse was killed in battle. The family crest records this act of heroism that was to be rewarded with a grant of lands in the Borders and the famous Armstrong name. [9]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">What do the colors on a coat of arms mean?</a>
                            </h4>
                        </div>
                        <div id="collapse15" class="panel-collapse collapse">
                            <div class="panel-body">
                                Authors have documented the history of the symbols on coats of arms gave these meanings to the various colors (tinctures).
                                <ol>
                                    <li>Black – Sable: Signifies wisdom, grief, constancy, and prudence</li>
                                    <li>Blue – Azure: Signifies loyalty, chastity, truth, strength, and faith</li>
                                    <li>Gold – Or: Signifies wisdom, generosity, glory, constancy, and faith</li>
                                    <li>Green – Vert: Signifies abundance, joy, hope, and loyalty in love</li>
                                    <li>Maroon/Blood Red – Sanguine / Murray: Signifies Fortitude or victorious</li>
                                    <li>Orange – Tenne / Tawny: Signifies ambition</li>
                                    <li>Purple – Purpure: Signifies temperance, regal, justice, royal majesty, and sovereignty</li>
                                    <li>Red – Gules: Signifies magnanimity, military strength, warrior and martyr</li>
                                    <li>Silver/White – Argent: Signifies truth, sincerity, peace, innocence and purity</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse16">Can you create a new coat of arms for me?</a>
                            </h4>
                        </div>
                        <div id="collapse16" class="panel-collapse collapse">
                            <div class="panel-body">No content.</div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse17">How many coats of arms are in the COADB.com database?</a>
                            </h4>
                        </div>
                        <div id="collapse17" class="panel-collapse collapse">
                            <div class="panel-body">No content.</div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse18">Do I have to be a professional or an expert to understand a coat of arms?</a>
                            </h4>
                        </div>
                        <div id="collapse18" class="panel-collapse collapse">
                            <div class="panel-body">
                                No, you do not have to be a professional or an expert to understand a coat of arms. Learning, researching and understanding coat of arms is a fun part of genealogy and learning about medieval times in history and how they distinguished themselves from one another with art and symbols. Once you find your family’s coat of arms, it’s fun to learn about all the various elements to know what your family once stood for.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse19">What are the elements of a coat of arms?</a>
                            </h4>
                        </div>
                        <div id="collapse19" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ol>
                                    <li>Shield or escutcheon</li>
                                    <li>Crest</li>
                                    <li>Supporters</li>
                                    <li>Motto</li>
                                    <li>Helmet</li>
                                    <li>Mantling</li>
                                    <li>Wreath</li>
                                    <li>Compartment</li>
                                </ol>
                                <h4 class="small-heading">Escutcheon</h4>
                                An escutcheon is a shield that forms the main or focal point of the coat of arms.
                                <br>
                                There are two main types of shields.
                                <ol>
                                    <li>A shield that the coat of arms is displayed. The shapes of the escutcheon (shield) will vary by region and era. The shield is regarded as a war-like device appropriate for men only. British ladies often bear their arms upon a lozenge (a diamond shape), while clergymen and ladies in other sections of continental Europe bear their arms on a cartouche (oval). There are other shapes that may be used for the escutcheon.</li>
                                    <li>A shield in which itself is a charge within a coat of arms. This is where there is a smaller shield placed on the larger shield. This can be seen in marshaling.</li>
                                </ol>
                                <h4 class="small-heading">Supporters</h4>
                                Supporters are sometimes referred to as attendants. They are figures or objects located on either side of the escutcheon and appear to be holding it up. These figures may be real or imaginary animals, human figures, and rare cases plants or other inanimate objects such as pillars.
                                <h4 class="small-heading">Crest</h4>
                                The crest originates from the Latin term “crista” meaning “tuft” or “plume”. They were originally based on the decorative sculptures that were born by knights in tournaments and sometimes during battle.
                                <h4 class="small-heading">Dexter</h4>
                                The Dexter is basically on the viewer’s left and the wearer’s right of the shield. It is considered the side with the greatest honor. It is also considered the male side of the crest and would hold the part of the “husband’s” arms.
                                <h4 class="small-heading">Sinister</h4>
                                The Sinister is basically on the viewer’s right and the wearer’s left of the shield. It is considered the female side of the crest and would hold the part of the “wife’s” arms.
                                <h4 class="small-heading">Compartment</h4>
                                A compartment is a design that is placed under the shield that are usually things like rocks, grassy mount or some other sort of landscape. It appears that the supporters are standing or resting one or more feet upon it.
                                <h4 class="small-heading">Slogan (Battle Cry)</h4>
                                The Slogan originated from the Scottish Gaelic saying of “sluagh-chairm” and is usually only seen in the Scottish heritage and is a heraldic or secondary motto. It usually appears above the crest on the coat of arms. In clans and septs heraldry it is usually their battle cry.
                                <h4 class="small-heading">Torse</h4>
                                A torse or wreath is a twisted roll of fabric that lay about the top of the helmet and the base of the crest. It must always be a metal and a color and is usually the same tincture as the mantling.
                                <h4 class="small-heading">Mantling</h4>
                                The mantling may also be called lambrequin and is a drapery (cloth) that was tied to the helmet base above the shield. It was originally worn by knights from their helmets to protect them from the elements and to decrease blows to the helmet during battle. This is the reason why it is usually shown as being tattered or cut into shreds. It is not very often that it is seen as an intact draping, but when it is, it is cases of the clergy.
                                <h4 class="small-heading">Helmet/Galero</h4>
                                The helmet or galero lies above the shield and holds the crest and torse. The helmet displayed varies according to rank and/or social status. In the German and Nordic heraldries, they may have two or three helmets. The Galero is a broad-brimmed hat with tasselated strings that was born by the clergy of the Catholic Cleric. It replaces where the helmet and crest are located. The color of the hat and the number of tassels indicate the cleric’s place in the hierarchy.
                                <h4 class="small-heading">Crown/Coronet</h4>
                                The crown is an emblem of a sovereign state or a monarch’s government or it is endorsed by it. The coronet is a small crown that has ornaments fixed on a metal ring, it never has arches and it encircles the head. The coronet is a rank symbol in heraldry that adorns the coat of arms. There are strict rules in heraldry for the use of a crown or coronet.
                                <h4 class="small-heading">Chief</h4>
                                The chief is a charge that takes the form of a band running horizontally across the top edge of the shield. The chief is one of the ordinaries along with the bend, chevron, fess, and pale just to name a few. In the Medieval and Renaissance times on the coat of arms, the chief would cover almost the entire top half of the shield.
                                <h4 class="small-heading">Field</h4>
                                The field is the background of the shield. It may have one or tinctures (colors or metals) or even fur. It can be divided and may even have a pattern to it. In a few rare cases, this area has had a picture or landscape.
                                <br>
                                For more information, please check out our online glossary of terms. [4] [11] [12] [13]
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse20">How do I know which coat of arms belongs to my specific family?</a>
                            </h4>
                        </div>
                        <div id="collapse20" class="panel-collapse collapse">
                            <div class="panel-body">No content.</div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse21">What is an armiger?</a>
                            </h4>
                        </div>
                        <div id="collapse21" class="panel-collapse collapse">
                            <div class="panel-body">
                                An armiger is a person who has the right to bear arms and is deemed to be of the status of a gentleman.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse22">Where do you find these arms? What source materials do you use?</a>
                            </h4>
                        </div>
                        <div id="collapse22" class="panel-collapse collapse">
                            <div class="panel-body">
                                We use hundreds of historical sources when we are populating and updating our coat of arms database to ensure we are as accurate as possible.
                                <br>
                                The following is a partial list of the resources we use:
                                <ul>
                                    <li>A Complete Body of Heraldry, Edmondson, Joseph, 1780</li>
                                    <li>Armorial Lusitano-a Portuguese resource, by Zairol</li>
                                    <li>Bolton’s American Armory-Charles Knowles Bolton, American Heraldry</li>
                                    <li>Burke’s General Armory; a registry of Armorial Bearings for England, Scotland, Ireland and Wales. Sir Bernard Burke, Ulster King of Arms</li>
                                    <li>Diccionario de Heraldica-J.A. Schnieper, one of our Spanish resources.</li>
                                    <li>Dizionario Storico-blasonico delle famiglie nobilie notabili Italiane; probably the best resource for Italian coats of arms; it was authored by G. B. Di Crollalanza in 1886 and features about 1400 blazons.</li>
                                    <li>Grosses Wappenbuch, Johann Siebmacher’s (1605); nobility of Bavaria, Austria, Hungary, Croatia, Bukovina, the Baltic States, Alsace, and numerous other kingdoms and principalities on the continent…</li>
                                    <li>Irish Arms-by Paul Murtaugh</li>
                                    <li>Irish Families-Edward MacLysaght, former Chief Herald of Ireland.</li>
                                    <li>L’Heraldique Napoleonienne-Philippe Lamarque</li>
                                    <li>La Methode du Blazon-C.F. Menestrier</li>
                                    <li>Rietstap’s Armorial General; it was compiled in the late 19th century by Johan Baptiste Rietstap from the Netherlands, and contains some 130,000 blazons of European Families.</li>
                                    <li>The Encyclopaedia Heraldica, 1828, by William Berry, who was the registering clerk for 15 years, for the College of Arms.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                    <h2 class="heading">Peers and Peerage</h2>
                    
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse23">What is the peerage and how does it work?</a>
                            </h4>
                        </div>
                        <div id="collapse23" class="panel-collapse collapse in">
                            <div class="panel-body">
                                A peerage is a legal system historically comprising hereditary titles in various countries, comprising various noble ranks.
                                <br>
                                A peer of the realm is someone who holds one (or more) of five possible titles (duke, marquess, earl, viscount, and baron). These titles are inherited from a direct ancestor or bestowed upon him by the monarch.
                                <br>
                                Tracing its origins to feudal times, peers were vassals of the monarch (servants who swore an oath of loyalty in exchange for protection or a fief – a bequest of land or money). These barons were periodically summoned to the Counsel or Parliament, forming the origins of the House of Lords.
                                <br>
                                Historically the peerage formed a tightly knit group of powerful nobles, inter-related through blood and marriage in successive generations, and highly protective of their lands and rights. Their fortunes rose and fell according to the stability of the kingdom and their favor with the Sovereign.
                                <br>
                                The Tudors, for example, executed, imprisoned or suppressed almost every nobleman who had any Plantagenet blood in his veins, and instead created a new aristocracy from the lesser branches of old families, and from the gentry and knightly classes. Subsequent changes made by the royal houses of Stuart, Hanover and Windsor have similarly brought new blood and new titles to the peerage. The ranks of the peerage were further enlarged by the passing of the Life Peerages Act of 1958.”
                                <br>
                                Membership was once an entitlement of all hereditary peers, other than those in the peerage of Ireland, but under the House of Lords Act 1999, the right to membership was restricted to 92 hereditary peers. [3]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse24">What is a life peer?</a>
                            </h4>
                        </div>
                        <div id="collapse24" class="panel-collapse collapse">
                            <div class="panel-body">
                                In the United Kingdom, life peers are appointed members of the peerage whose titles cannot be inherited, in contrast to hereditary peers. In modern times, life peerages, always created at the rank of baron, are created under the Life Peerages Act 1958 and entitle the holders to seats in the House of Lords, presuming they meet qualifications such as age and citizenship. The legitimate children of a life peer are entitled to style themselves with the prefix “The Honorable”, although they cannot inherit the peerage itself. [3] [7]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse25">Who has the authority to create a peer?</a>
                            </h4>
                        </div>
                        <div id="collapse25" class="panel-collapse collapse">
                            <div class="panel-body">
                                The prime minister will nominate a person to be a life peer. However, they are only officially appointed by the Crown. [3] [19]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse26">What privileges and power did peers have?</a>
                            </h4>
                        </div>
                        <div id="collapse26" class="panel-collapse collapse">
                            <div class="panel-body">
                                Being of higher social status, peers had numerous privileges and powers.
                                <ol>
                                    <li>Access to the Sovereign to advise him or her on matters of state</li>
                                    <li>Eligible to be appointed (as opposed to being elected) to the House of Lords also known as the upper chamber of parliament</li>
                                    <li>Freedom from arrest in civil cases</li>
                                    <li>Trial by jury of other members of the peers (for some crimes).</li>
                                </ol>
                                These privileges still exist although occasions of its exercise have now diminished into obscurity.
                            </div>
                        </div>
                    </div>
                
                    <h2 class="heading">Knightage and Knights</h2>
                    
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse27">What is the knightage?</a>
                            </h4>
                        </div>
                        <div id="collapse27" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Knightage is the state of being a knight.
                                <br>
                                A knight is a man a man who served his sovereign or lord as a mounted soldier in armor.
                                <br>
                                The female equivalent of a knight is referred to as a dame.
                                <br>
                                The title of knight and dame are appointed by the Crown and are given for life only. These titles are not passed down to one’s descendants.
                                <br>
                                A knight is also granted the title of “Sir’ before his name (i.e. Sir John Smith), and a dame may use the title ‘Dame’ before her name (i.e. Dame Mary Jones).
                                <br>
                                In modern times, titles of knights are dames are still given by the crown as more of an honorary title to singers, artists, actors, etc.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse28">What privileges and power did knights have?</a>
                            </h4>
                        </div>
                        <div id="collapse28" class="panel-collapse collapse">
                            <div class="panel-body">
                                Having the title of a knight is a great privilege and honor.
                                <br>
                                Knights were granted lodging, food, armor, weapons, horses and money.
                                <br>
                                If a knight overtook a town, they had the right to pillage and take whatever valuables they found.
                                <br>
                                When it came to jousts and tournaments, participants had to be invited and typically invitations were only granted to knights.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse29">What is the difference between a knight’s bachelor and a knight?</a>
                            </h4>
                        </div>
                        <div id="collapse29" class="panel-collapse collapse">
                            <div class="panel-body">
                                As part of the British honors system, the title of Knight Bachelor is the basic and lowest rank of a man who has been knighted by the monarch. However, a Knights Bachelor is not a member of one of the organized orders of chivalry. [16]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse30">What responsibilities did knights have?</a>
                            </h4>
                        </div>
                        <div id="collapse30" class="panel-collapse collapse">
                            <div class="panel-body">
                                With the powers and privilege also comes great responsibility. Knights, while maintaining a position of military force, were often responsible for training and managing the other soldiers, horses, stables and other tasks around the castle or estate.
                            </div>
                        </div>
                    </div>
                
                    <h2 class="heading">DNA</h2>
                    
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse31">Can my DNA results help me find my specific coat of arms or family crest?</a>
                            </h4>
                        </div>
                        <div id="collapse31" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Your DNA results cannot help you find your specific coat of arms or family crest.
                                <br>
                                However, we encourage users to use the DNA data to find matches and communicate through social media networks to find those who may be on the same mission to find their family’s coat of arms.
                            </div>
                        </div>
                    </div>
                
                    <h2 class="heading">Family Crest</h2>
                    
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse32">What is a family crest?</a>
                            </h4>
                        </div>
                        <div id="collapse32" class="panel-collapse collapse in">
                            <div class="panel-body">
                                The term family crest is interchangeable with the term a coat of arms.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse33">What is the difference between a family crest and coat of arms?</a>
                            </h4>
                        </div>
                        <div id="collapse33" class="panel-collapse collapse">
                            <div class="panel-body">
                                Technically, there are slight differences between a family crest and a coat of arms. Coats of Arms is the original designation and term and family crest later become a misnomer (designation). Over time, these two terms are used interchangeably to describe the same thing.
                                <br>
                                However, there is an informal difference with these two terms is that the word crest refers to what is displayed on top of the helmet while a coat of arms refers to the shield.
                                <br>
                                COADB.com and many sites that discuss the family crest and coats of arms choose to use the terms interchangeably in content because that’s how many people know and will search for the term. [11] [12]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse34">What is a blazon?</a>
                            </h4>
                        </div>
                        <div id="collapse34" class="panel-collapse collapse">
                            <div class="panel-body">
                                From the French word blason, meaning “shield”, a blazon is the written technical description and specialized language in which a blazon is written of what a coat of arms looks like and describes or depicts the armorial bearings in the correct heraldic manner so the reader or artist can reconstruct the appropriate image.
                                <br>
                                For more information, please check out our online glossary of terms.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse35">Do I have to be a professional or an expert to understand a family crest?</a>
                            </h4>
                        </div>
                        <div id="collapse35" class="panel-collapse collapse">
                            <div class="panel-body">
                                No, you do not have to be a professional or an expert to understand a family crest or coats of arms. Learning, researching and understanding a family crest or coats of arms is a fun part of genealogy and learning about medieval times in history and how they distinguished themselves from one another with art and symbols. Once you find your specific family crest, it’s fun to learn about all the various elements to know what your family once stood for.
                            </div>
                        </div>
                    </div>
                
                    <h2 class="heading">Genealogy</h2>
                    
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse36">What is genealogy?</a>
                            </h4>
                        </div>
                        <div id="collapse36" class="panel-collapse collapse in">
                            <div class="panel-body">
                                ge·ne·al·o·gy from Latin “genealogia”.
                                <br>
                                Genealogy is the study of family ancestral lines, lineages and history.
                                <br>
                                A genealogist is a person that establishes kinship and pedigrees using a range of techniques including interviews, historical records located online and at local archive centers, genetic analysis (DNA), heraldry, art, and other records to obtain information about a family. Pedigrees may be written as narratives but are more often displayed in charts.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse37">What is a family tree?</a>
                            </h4>
                        </div>
                        <div id="collapse37" class="panel-collapse collapse">
                            <div class="panel-body">
                                A family tree is a diagram that shows the relationship between people in several generations of a family.
                                <br>
                                Family trees are often presented with the oldest generations at the top and the newer generations at the bottom.
                                <br>
                                Many family tree designs incorporate the image or graphic of a real tree that is narrow at the top and grows wider towards the ground. The branches of a tree represent the many branches of a family.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse38">What are other terms used for a family tree?</a>
                            </h4>
                        </div>
                        <div id="collapse38" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li>Ancestral Tree</li>
                                    <li>Ancestry chart</li>
                                    <li>Ancestry or Genealogy Fan Chart</li>
                                    <li>Genealogical Tree</li>
                                    <li>Genealogy chart</li>
                                    <li>Pedigree chart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse39">How far back in time can a person research their genealogy?</a>
                            </h4>
                        </div>
                        <div id="collapse39" class="panel-collapse collapse">
                            <div class="panel-body">
                                A person can only research as far back in time as accurately as the records that are available. Some people will be luckier than others on how far back they can research based on available church and government records. It’s an unfortunate reality that over time, records may have been destroyed by natural and unnatural forces that make it impossible to research accurately deep into the history of human events.
                                <br>
                                Parish record keeping for baptisms, marriages and deaths started in the late 1500s and was mandated throughout Europe during the 1600s. Parish records were so well-kept and maintained that they were deemed suitable for official government use.
                                <br>
                                If you have royal or famous ancestry, you may be able to research as far back as official records allow but for a more common person, you may be limited to only 300-500 years of reliable historical records. [20]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse40">Can Coadb.com create my family tree or genealogy?</a>
                            </h4>
                        </div>
                        <div id="collapse40" class="panel-collapse collapse">
                            <div class="panel-body">
                                Coadb.com does offer a Genealogy Research Report service where we research and compile our findings into a presentable format. Check out our Genealogy Research Report page to check out what we have to offer.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse41">How did surnames originate?</a>
                            </h4>
                        </div>
                        <div id="collapse41" class="panel-collapse collapse">
                            <div class="panel-body">
                                Surnames, as we know them today, have not always existed and, even today, are not used in all cultures.
                                <br>
                                In the early years of the Middle Ages most people within Europe lived in small farming communities and everyone knew their neighbors so there was little need for last names (surnames). But as the population and towns grew, there became a need to be able to tell two people with the same first name apart.
                                <ol>
                                    <li>The birth of surnames was a spontaneous phenomenon throughout Europe, starting in Britain and falls outside the legislative or administrative framework.</li>
                                    <li>The illiteracy of the time did not allow a well-established spelling for surnames.</li>
                                    <li>These nicknames were individual. Each member of your family could have a different name or multiple names in their lifetime.</li>
                                    <li>Nobody chose their own name: these were given by neighbors and thirds, which associated them with some form of irony!</li>
                                </ol>
                                One of the forces that worked to stabilize the use of surnames was taxation. The taxing authority (king, noble, city council, local parish church for tithes) needed clear records to keep up with who had paid, and even more importantly, not paid their taxes. The Doomsday Book started by William the Conqueror was the first such example. Which was a remarkable feat of organization as the affair of collecting and writing down the names and property for taxation lasted just a year. It was started in 1185 and completed in 1186.
                                <br>
                                It was this effort which made communities and individuals choose what we loosely in the West call a full name i.e., ‘John Thatcher’ of Shrewsbury. The earliest non-noble names were usually in some form of patronymic form such as Richard John’s Son; Richard Johnson. In stable societies which did not migrate from one location to the next, this was a workable solution.
                                <br>
                                In only a few societies at the time, and usually to only the very wealthy did women carry a surname.
                                <br>
                                The Black Plague (1347 to 1351) wrecked the medieval world with an estimated 75 to 200 million deaths or 60% of Europe’s population. This major event caused massive migrations within Europe as people fled the dying cities. It also created a massive labor shortage, which meant serfs who had previously been tied to their land, were now able to move about and command wages for their work. These migrations and events brought about the common usage of a surname. [23]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse42">What are the different types of surnames?</a>
                            </h4>
                        </div>
                        <div id="collapse42" class="panel-collapse collapse">
                            <div class="panel-body">
                                There are several different types of surnames, the five most common of which are as follows:
                                <ol>
                                    <li>
                                        <b>Characteristic</b> – Surnames based on a person’s physical appearance (ex. tall or short, hair color, and complexion) or based on certain personality traits that one displayed (ex. bold, cunning).
                                        <br>
                                        Examples include: Little, Black, Short, and Swift.
                                    </li>
                                    <li>
                                        <b>Habitational</b> – Surnames based on the town or village a person was born in or worked on.
                                        <br>
                                        Examples include: Hamilton, Sutton, Burton, Bedford, and Hampshire.
                                    </li>
                                    <li>
                                        <b>Occupational</b> – Surnames based on the job the person performed.
                                        <br>
                                        Examples include: Wheeler, Cartwright, Butcher, Brewer, Baker, Dyer, Taylor, Glover, and Weaver.
                                    </li>
                                    <li>
                                        <b>Patronymic</b> – Surnames that have been passed down by one’s father or mother or ancestors in general.
                                        <br>
                                        Examplesinclude: Johnson, Benson, Davidson and Peterson.
                                    </li>
                                    <li>
                                        <b>Topographic</b> – Surnames based on certain geographic features of the area in which a person was born or worked.
                                        <br>
                                        Examples include: Brooks, Bridges, Bush, Hill, Woodruff, and Forest.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse43">How many surnames are in the COADB.com database?</a>
                            </h4>
                        </div>
                        <div id="collapse43" class="panel-collapse collapse">
                            <div class="panel-body">
                                There are over 4,000 surnames in our database and we are always adding new surnames and content.
                            </div>
                        </div>
                    </div>
                
                
                    <h2 class="heading">Family Research</h2>
                
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse44">What is the difference between genealogy and family research?</a>
                            </h4>
                        </div>
                        <div id="collapse44" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Like the similarities between the coat of arms and the family crest, we often see the terms genealogy and family research used interchangeably. Both genealogy and family research involves seeking information about a person’s ancestors and family lineage.
                                <br>
                                However, family research goes beyond ancestry and lineages by digging into the lives of our ancestors at a more superficial level to help us understand more about their everyday lives and who they actually were.
                                <br>
                                <ul>
                                    <li>Hobbies, personal interests, etc.</li>
                                    <li>Occupations, religion, politics</li>
                                    <li>Stories, legends</li>
                                    <li> Where and how did they live</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse45">How far back in time can a person research their family history?</a>
                            </h4>
                        </div>
                        <div id="collapse45" class="panel-collapse collapse">
                            <div class="panel-body">
                                A person can only research as far back in time as accurately as the records that are available. Some people will be luckier than others on how far back they can research based on available church and government records. It’s an unfortunate reality that over time, records may have been destroyed by natural and unnatural forces that make it impossible to research accurately deep into the history of human events.
                                <br>
                                Parish record keeping for baptisms, marriages and deaths started in the late 1500s and was mandated throughout Europe during the 1600s. Parish records were so well-kept and maintained that they were deemed suitable for official government use.
                                <br>
                                If you have royal or famous ancestry, you may be able to research as far back as official records allow but for a more common person, you may be limited to only 300-500 years of reliable historical records. [20]
                            </div>
                        </div>
                    </div>
                
                    <h2 class="heading">Surnames</h2>
                
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse46">How did surnames originate?</a>
                            </h4>
                        </div>
                        <div id="collapse46" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Surnames, as we know them today, have not always existed and, even today, are not used in all cultures.
                                <br>
                                In the early years of the Middle Ages most people within Europe lived in small farming communities and everyone knew their neighbors so there was little need for last names (surnames). But as the population and towns grew, there became a need to be able to tell two people with the same first name apart.
                                <ol>
                                    <li>The birth of surnames was a spontaneous phenomenon throughout Europe, starting in Britain and falls outside the legislative or administrative framework.</li>
                                    <li>The illiteracy of the time did not allow a well-established spelling for surnames.</li>
                                    <li>These nicknames were individual. Each member of your family could have a different name or multiple names in their lifetime.</li>
                                    <li>Nobody chose their own name: these were given by neighbors and thirds, which associated them with some form of irony!</li>
                                </ol>
                                One of the forces that worked to stabilize the use of surnames was taxation. The taxing authority (king, noble, city council, local parish church for tithes) needed clear records to keep up with who had paid, and even more importantly, not paid their taxes. The Doomsday Book started by William the Conqueror was the first such example. Which was a remarkable feat of organization as the affair of collecting and writing down the names and property for taxation lasted just a year. It was started in 1185 and completed in 1186.
                                <br>
                                It was this effort which made communities and individuals choose what we loosely in the West call a full name i.e., ‘John Thatcher’ of Shrewsbury. The earliest non-noble names were usually in some form of patronymic form such as Richard John’s Son; Richard Johnson. In stable societies which did not migrate from one location to the next, this was a workable solution.
                                <br>
                                In only a few societies at the time, and usually to only the very wealthy did women carry a surname.
                                <br>
                                The Black Plague (1347 to 1351) wrecked the medieval world with an estimated 75 to 200 million deaths or 60% of Europe’s population. This major event caused massive migrations within Europe as people fled the dying cities. It also created a massive labor shortage, which meant serfs who had previously been tied to their land, were now able to move about and command wages for their work. These migrations and events brought about the common usage of a surname. [23]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse47">How many surnames are in the COADB.com database?</a>
                            </h4>
                        </div>
                        <div id="collapse47" class="panel-collapse collapse">
                            <div class="panel-body">
                                There are over 4,000 surnames in our database and we are always adding new surnames and content.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse48">What are the different types of surnames?</a>
                            </h4>
                        </div>
                        <div id="collapse48" class="panel-collapse collapse">
                            <div class="panel-body">
                                There are several different types of surnames, the five most common of which are as follows:
                                <ol>
                                    <li>
                                        <b>Characteristic</b> – Surnames based on a person’s physical appearance (ex. tall or short, hair color, and complexion) or based on certain personality traits that one displayed (ex. bold, cunning).
                                        <br>
                                        Examples include: Little, Black, Short, and Swift.
                                    </li>
                                    <li>
                                        <b>Habitational</b> – Surnames based on the town or village a person was born in or worked on.
                                        <br>
                                        Examples include: Hamilton, Sutton, Burton, Bedford, and Hampshire.
                                    </li>
                                    <li>
                                        <b>Occupational</b> – Surnames based on the job the person performed.
                                        <br>
                                        Examples include: Wheeler, Cartwright, Butcher, Brewer, Baker, Dyer, Taylor, Glover, and Weaver.
                                    </li>
                                    <li>
                                        <b>Patronymic</b> – Surnames that have been passed down by one’s father or mother or ancestors in general.
                                        <br>
                                        Examplesinclude: Johnson, Benson, Davidson and Peterson.
                                    </li>
                                    <li>
                                        <b>Topographic</b> – Surnames based on certain geographic features of the area in which a person was born or worked.
                                        <br>
                                        Examples include: Brooks, Bridges, Bush, Hill, Woodruff, and Forest.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse49">How do Spanish naming conventions work?</a>
                            </h4>
                        </div>
                        <div id="collapse49" class="panel-collapse collapse">
                            <div class="panel-body">
                                In Spanish cultures, people commonly use a single or compound given name and surnames naming convention.
                                <br>
                                Example combination given names;
                                <ol>
                                    <li>Diego Alejandro (assumed male)</li>
                                    <li>Juan Martín (assumed male)</li>
                                    <li>Sara Sofía (assumed female)</li>
                                </ol>
                                Example combination surnames
                                <ol>
                                    <li>García Ramírez</li>
                                    <li>Cruz Sánchez</li>
                                </ol>
                                By tradition, a person’s surname is based on the first surname of the father and the second surname is the mother’s first surname.
                                <br>
                                If we put together the name of “Diego Alejandro García Ramírez”, we can conclude that his father is Diego García. The mother would have the surname of Ramírez and her first name would be unknown because of the gender assumption that Diego is a male.
                                <br>
                                However, if we try “Sara Sofía García Ramírez” we can conclude that the mother is Sara Ramírez and the father has the surname García. The father would have the surname García but his first name would be unknown because of the gender assumption that Sara is a female.
                                <br>
                                When addressing someone by their surname in Spanish cultures, as a general rule you use their paternal or maternal first surname, depending on gender. [22]
                                <ol>
                                    <li>Diego Alejandro García Ramírez (Señor, or Mr., García)</li>
                                    <li>Sara Sofía García Ramírez (Señora/Señorita, or Mrs./Miss, García)</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse50">	How do Scandinavian and Icelandic naming conventions work?</a>
                            </h4>
                        </div>
                        <div id="collapse50" class="panel-collapse collapse">
                            <div class="panel-body">
                                Icelandic and Scandinavian names differ from the typical English, French and German surnames we commonly recognize in genealogy research.
                                <br>
                                Scandinavian countries; Norway, Sweden, Denmark and the Faroe Islands and the country of Iceland (small population and has existed as a stable non-migrating culture since its foundation) share a common cultural heritage with the common use of a person’s surname as an indication of the first name of their father (patronymic) or in some cases mother (matronymic). [14] [21]
                                <ol>
                                    <li>Christensen – Son of Christen</li>
                                    <li>Helguson – Helga’s Son</li>
                                    <li>Pedersen – Son of Peder</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                
                    <h2 class="heading">Baronetage and Baronets</h2>
                
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse51">What are Baronets and Barons?</a>
                            </h4>
                        </div>
                        <div id="collapse51" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Baronets and barons are people that are neither members of the peerage nor of the knightage.
                                <br>
                                The rank of baronet and baron “was man” who pledged his loyalty and service to his superior in return for land that he could pass to his heirs. This system was primarily created to raise money to suppress the rebellion that had broken out in Ulster. The Baronets were needed to pay money to get the privilege of the rank. The Baronets got the privilege to be addressed as Sir or Dame at a price of 1080 pounds.
                                <br>
                                A Baronet is the lowest ranking title in the list of British order. A baronet can use the title like “sir” also reserved for knights
                                <br>
                                The hereditary order of baronets in England was instituted by letters patent by King James I on 22 May 1611, for the settlement of Ireland. He offered the dignity to 200 gentlemen of good birth, with a clear estate of £1,000 a year, on condition that each should pay into the king’s exchequer in three equal installments a sum equivalent to three years’ pay to thirty soldiers at 8d per day per man.
                                <br>
                                Barons and baronets were allowed to put the Red Hand of Ulster on their coat of arms. [25]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse52">What is the baronetage?</a>
                            </h4>
                        </div>
                        <div id="collapse52" class="panel-collapse collapse">
                            <div class="panel-body">
                                First published in 1914, the baronetage is an official list of barons and baronets compiled by the British Crown Office which is a section of the Ministry of Justice, and published by the Standing Council of the Baronetage. Only those persons listed on the roll are members of the baronetage.
                                <br>
                                Any person who wishes to claim succession to a baronetcy must produce the necessary proof of succession to the Secretary of State for Justice. There are many heirs to baronetcies who have not done so.
                            </div>
                        </div>
                    </div>
                
                    <h2 class="heading">Other Notable Titles</h2>
                
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse53">What is a letter patent?</a>
                            </h4>
                        </div>
                        <div id="collapse53" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Created by the monarch or government entity, a letter patent grants power, rights and authority to carry out duties and actions. However, a letter of patent does not transfer powers of royal or government authority and can be revoked at any time. [1]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse54">What is an esquire?</a>
                            </h4>
                        </div>
                        <div id="collapse54" class="panel-collapse collapse">
                            <div class="panel-body">
                                The term esquire is a historical title of respect among men of high social rank, below the rank of knight.
                                <br>
                                An esquire can be a candidate for knighthood after serving as a squire as shield bearer and attendant to a knight.
                                <br>
                                During colonial times, Virginia was referred to as “the land of second sons”. The first sons (eldest) stayed in their homelands to inherit the knighthood from their father. Second sons came to Virginia and neighboring states and became landowners and referred to themselves as esquires as they were considered to be of high social rank for the times. [10]
                                <br>
                                In modern society, the term esquire is used as a title of courtesy by lawyers and attorneys.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse55">What is a squire?</a>
                            </h4>
                        </div>
                        <div id="collapse55" class="panel-collapse collapse">
                            <div class="panel-body">
                                Starting in the Middle Ages, a squire was the shield- or armor-bearer to a knight. At times, a squire acted as a knight’s errand runner or personal assistant.
                                <br>
                                The term squire is a shortened version of the word esquire and in Latin, the term scutarius means “shield bearer”. [6]
                                <br>
                                As assistants to a knight, squires often worked in the stables taking care of horses, carried the knight’s shield and sword, guarded prisoners, cleaned armor, and other forms of manual labor.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse56">What is a courtesy title?</a>
                            </h4>
                        </div>
                        <div id="collapse56" class="panel-collapse collapse">
                            <div class="panel-body">
                                A courtesy title is a title that holds no legal authority and is given to the son or daughter of a peer.
                                <ul>
                                    <li>Baron/Baroness</li>
                                    <li>Duke/Dutchess</li>
                                    <li>Earl/Countess</li>
                                    <li>Lord/Lady</li>
                                    <li>Viscount/Viscountess</li>
                                </ul>
                                The Hon, or “The Honorable”, is a title prefix used before the courtesy title to formally announce or present a person of title. [2]
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse57">What is a minstrel?</a>
                            </h4>
                        </div>
                        <div id="collapse57" class="panel-collapse collapse">
                            <div class="panel-body">
                                A minstrel was a person within the royal community that supervised and organized festivities. Events included tournaments where they would speak of the good deeds, virtues, and ancestry of the knight.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse58">How do English/Irish/Scottish/Welsh titles compare to other European countries with Heraldry?</a>
                            </h4>
                        </div>
                        <div id="collapse58" class="panel-collapse collapse">
                            <div class="panel-body">
                                Throughout Europe, there are different languages, traditions and titles.
                                <br>
                                Here’s a small list of how English titles compare to those in other areas of Europe that follow titles of nobility.
                                <br>
                                <div class="col-sm-3 comparison-list">
                                    <ul>
                                        <li><b>English</b></li>
                                        <li>Emperor</li>
                                        <li>King</li>
                                        <li>Duke</li>
                                        <li>Prince</li>
                                        <li>Marquis/Margrave</li>
                                        <li>County/Earl</li>
                                        <li>Viscount</li>
                                        <li>Baron</li>
                                        <li>Lord</li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 comparison-list">
                                    <ul>
                                        <li><b>Latin</b></li>
                                        <li>Imperator</li>
                                        <li>Rex</li>
                                        <li>Dux</li>
                                        <li>Princeps</li>
                                        <li>Marchio</li>
                                        <li>Comes</li>
                                        <li>Vicecomes</li>
                                        <li>[Liber] Baro</li>
                                        <li>Dominus</li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 comparison-list">
                                    <ul>
                                        <li><b>German</b></li>
                                        <li>Kaiser</li>
                                        <li>König</li>
                                        <li>Herzog</li>
                                        <li>Fürst</li>
                                        <li>Markgraf</li>
                                        <li>Graf</li>
                                        <li>Vizegraf</li>
                                        <li>Freiherr</li>
                                        <li>Herr</li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 comparison-list">
                                    <ul>
                                        <li><b>French</b></li>
                                        <li>Empereur</li>
                                        <li>Roi</li>
                                        <li>Duc</li>
                                        <li>Prince</li>
                                        <li>Marquis</li>
                                        <li>Comete/(ancient) Cuens</li>
                                        <li>Vicomte</li>
                                        <li>Baron</li>
                                        <li>Sire/Seigneur</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <h2 class="heading">Shopping on Coadb.com</h2>
                
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse59">Do I have to prove my connection to a surname and its coat of arms that is in your database in order to purchase an item?</a>
                            </h4>
                        </div>
                        <div id="collapse59" class="panel-collapse collapse in">
                            <div class="panel-body">
                                No, you do not have to prove your connection to a specific surname in order to purchase an item from our online store. There are many people who buy items for decorative purposes or for gifts for friends and relatives.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse60">What is your refund/return policy?</a>
                            </h4>
                        </div>
                        <div id="collapse60" class="panel-collapse collapse">
                            <div class="panel-body">
                                We have a 30 day 100% money back guarantee. If you are not satisfied with your purchase, please contact info@coadb.com or call 313-405-6913. Rest assured we will get back to you.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse61">How long should my order take to process, ship and deliver?</a>
                            </h4>
                        </div>
                        <div id="collapse61" class="panel-collapse collapse">
                            <div class="panel-body">
                                Orders are typically fulfilled within 2-7 days with our average at about 3 days.
                                <br>
                                Orders will arrive in about 2-4 days depending on the shipping method selection. International orders will take longer.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse62">Can you create a new coat of arms for me?</a>
                            </h4>
                        </div>
                        <div id="collapse62" class="panel-collapse collapse">
                            <div class="panel-body">
                                Yes, but only for fun. We do not grant official arms. Please contact us and describe your project so we can provide you with a quote.
                                <br>
                                Typically we try to offer three separate concepts, with two rounds of revisions for $49 USD.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default md-whiteframe-2dp">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse62">How long has COADB.com been in business?</a>
                            </h4>
                        </div>
                        <div id="collapse62" class="panel-collapse collapse">
                            <div class="panel-body">
                                Our interest in heraldry started in 2004. With that, we launched two predecessor website sites (familycoats.com and familycrestdb.com) before settling on COADB.com website which launched in 2015.
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</section>
<!-- Leave A Comment section End Here -->

<?php get_footer();?>