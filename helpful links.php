<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpful Links</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
     @import url(links.css);   
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    
        <!-- PrimeReact -->
        <link rel="stylesheet" href="https://unpkg.com/primeicons/primeicons.css" />
        <link rel="stylesheet" href="theme.css" />
        <link rel="stylesheet" href="https://unpkg.com/primereact/resources/primereact.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/primeflex@3.1.2/primeflex.min.css" />

        <!-- Dependencies -->
        <script src="https://unpkg.com/react/umd/react.production.min.js"></script>
        <script src="https://unpkg.com/react-dom/umd/react-dom.production.min.js"></script>
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
        <script src="https://unpkg.com/react-transition-group@4.4.2/dist/react-transition-group.js"></script>


        <script src="https://unpkg.com/primereact/core/core.min.js"></script>
        <script src="https://unpkg.com/primereact/messages/messages.min.js"></script>
        <script src="https://unpkg.com/primereact/message/message.min.js"></script>
    

</head>

<body> 
<div id="root"></div>

<script type="text/babel">

const { useEffect, useState, useRef } = React;
const { Messages } = primereact.messages;
const { Message } = primereact.message;

const MessagesDemo = () => {
const msgs3 = useRef(null);
const msgs4 = useRef(null);

useEffect(() => {

    msgs3.current.show({
        severity: 'info', sticky: true, content: (
            <React.Fragment>
                <div className="ml-1">If in an emergency, call 911</div>
            </React.Fragment>
        )
    });

    msgs4.current.show({
        severity: 'info', sticky: true, content: (
            <React.Fragment>
                <div className="ml-2">Suicide Helpline: 988 or (1-800-273-8255)</div>
            </React.Fragment>
        )
    });
}, []);

return (
    
        <div className="card">
            <Messages ref={msgs3} />
            <Messages ref={msgs4} />
            
        </div>
    
)
}
            
const rootElement = document.getElementById("root");
ReactDOM.render(<MessagesDemo />, rootElement);

    </script>
    
    <div id="background-wrap">
        <div class="x1">
            <div class="cloud"></div>
        </div>
    
        <div class="x2">
            <div class="cloud"></div>
        </div>
    
        <div class="x3">
            <div class="cloud"></div>
        </div>
    
        <div class="x4">
            <div class="cloud"></div>
        </div>
    
        <div class="x5">
            <div class="cloud"></div>
        </div>
    </div>
    <header>
    <div id ="logo">
        <img src = "logo.png" width="150" height="120">
        <h1 class = "rise">Helping Hand</h1>
    </div> 
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="MoodQuiz.php">Mental Help Quiz</a></li>
                <li><a href="helpful links.php">Resources</a></li>
                <li><a href="timerbox.php">Journal</a></li>
                <li><a href="discussion.php">Discuss</a></li>
                <li><a href="about.php">About Us</a></li>
                <?php if (!isset($_SESSION["userid"])) { ?>
    		        <?php echo '<li><a href="register.php">Login</a></li>' ?>
		        <?php } ?>
    		    <?php if (isset($_SESSION["userid"])) { ?>
    			    <?php echo '<li><a href="logout.php">Logout</a></li>' ?>
    		    <?php } ?>
            </ul>
        </nav>
    </header>
    <h1>Helpful Links!</h1>
    <!--
    <div id="searchBar">
        <input type="text" id="searchInput" onkeyup="searchLinks()" placeholder="Search on this Page...">
    </div>
    -->
    
    <div id="helpful_links">
        <section class="articles">        
        
        
            <em><h2>Articles</h2></em>
            <ul>
                <li><button class="collapsible">Depression</button>
                    <div class="content">
                        <ul>
                            <li><a href="https://www.psychiatry.org/patients-families/depression/what-is-depression" target="_blank">Depression Symptoms</a></li>
                            <li><a href="https://www.health.harvard.edu/mind-and-mood/what-causes-depression" target="_blank">Depression Causes</a></li>
                            <li><a href="https://www.helpguide.org/articles/depression/depression-treatment.htm" target="_blank">Depression Treatment</a></li>
                        </ul>
                    </div>
                </li>
                <li><button class="collapsible">Anxiety</button>
                    <div class="content">
                        <ul>
                            <li><a href="https://www.psychiatry.org/patients-families/anxiety-disorders/what-are-anxiety-disorders" target="_blank">Anxiety Symptoms</a></li>
                            <li><a href="https://www.mind.org.uk/information-support/types-of-mental-health-problems/anxiety-and-panic-attacks/causes/" target="_blank">Anxiety Causes</a></li>
                            <li><a href = "https://www.betterhealth.vic.gov.au/health/conditionsandtreatments/anxiety-treatment-options" target="_blank">Anxiety Treatment</a></li>
                        </ul>
                        </div>
                    
                    <button class = "collapsible">ADHD</button>
                        <div class = "content">
                        <ul>
                            <li><a href = "https://www.psychiatry.org/patients-families/adhd/what-is-adhd" target="_blank">ADHD Symptoms</a></li>
                            <li><a href = "" target="_blank">ADHD Causes</a></li>
                            <li><a href = "" target="_blank">ADHD Treatments</a></li>
                        
                        </ul>
                        </div>
                    
                    <button class = "collapsible">Body Dysmorphia</button>
                        <div class = "content">
                        <ul>
                            <li><a href = "https://www.hopkinsmedicine.org/health/conditions-and-diseases/body-dysmorphic-disorder" target="_blank">Body Dysmporphia Causes, <br>Risks, <br>Symptoms, <br> Diagnosis, <br>Treatment</a></li>   
                        </ul>
                        </div>
                    
                    <button class = "collapsible">More</button>
                        <div class = "content">
                        <ul>   
                            <li><a href="https://nesslabs.com/self-love" target="_blank">The Necessity of Self Love</a></li>
                            <li><a href="https://www.washingtonpost.com/wellness/2022/02/25/body-neutrality-definition/" target="_blank">Practicing Body Neutrality</a></li>
                            <li><a href = "https://www.intelligentchange.com/blogs/read/the-power-of-affirmations" target="_blank">Positive Affirmations</a></li>
                        </ul>
                        </div>
                    
        
                </ul>
            </section>
            <section class = "exercises">
                <em><h2>Helpful Exercises</h2></em>
                <ul>
                    <li><button class = "collapsible">Mindfullness and Meditation</button></a>
                    <div class = "content">   
                    <ul>
                        <li><a href = "https://www.youtube.com/watch?v=O-6f5wQXSu8" target="_blank">Guided Meditation for Anxiety</a></li>
                        <li><a href = "https://www.youtube.com/watch?v=psU7jLzN7RE" target="_blank">Meditation for Beginners</a></li>
                        <li>Bonus: 
                        <ul>
                            <li><a href = "https://www.youtube.com/watch?v=r3neFV38TJQ" target="_blank">Meditation's Impact on the Brain</a></li>
                        </ul>
                        </li>
        
                    </ul>
                    </div> 
                    </li>
                    <li><button class = "collapsible">Breathing Exercises</button>
                    <div class = "content">
                    <ul>
                        <li><a href = "https://www.youtube.com/watch?v=8vkYJf8DOsc" target="_blank">Breathing Exercise to Stop a Panic Attack</a></li>
                        <li><a href = "https://www.youtube.com/watch?v=acUZdGd_3Dg" target="_blank">Breathing Exercises For Beginners</a></li>
                        <li><a href = "https://www.youtube.com/watch?v=4wEDoKm40Yc" target="_blank">Breathing Exercises For Sleep</a></li>
                    </ul>
                    </div>    
                    </li>
                </ul>
        
            </section>
            <section class = "activities">
                <em><h2>Stress Relieving Activities</h2></em>
                <ul>
                    <li><button class = "collapsible">Knitting</button>
                    <div class = "content">    
                    <ul>
                        <li><a href = "https://www.nytimes.com/2018/07/11/smarter-living/how-to-start-knitting.html" target="_blank">Getting Started with Knitting</a></li>
                        <li><a href = "https://www.youtube.com/watch?v=nEfmQJKo6oA" target="_blank">Calming Knitting Video</a></li>
                    </ul>
                    </div>
                    </li>
                    <li><button class = "collapsible">Baking</button>
                        <div class = "content">
                        <ul>
                            <li><a href = "https://thekitchencommunity.org/how-to-start-baking-for-beginners/" target="_blank">Beginning Baking</a></li>
                            <li><a href = "https://www.youtube.com/watch?v=vtwX4aFMiK8" target="_blank">Baking Video</a></li>
                        </ul>
                        </div>
                    </li>
                    <li><button class = "collapsible">Stretch</button>
                        <div class = "content">
                        <ul>
                        <li><a href = "https://www.youtube.com/watch?v=qULTwquOuT4" target="_blank">Beginner Friendly Video for Stretching</a></li>
                        <li><a href = "https://www.youtube.com/watch?v=AINaU0Oxdjo" target="_blank">Intermediate Video for Stretching</a></li>
                        </ul>
                        </div>
                    </li>
                    <li><button class = "collapsible">Clean</button>
                        <div class = "content">
                        <ul>
                            <li><a href = "https://www.psycom.net/anxiety/mental-health-benefits-cleaning" target="_blank">Why Cleaning Can Improve Your Mental Health</a></li>
                            <li><a href = "https://www.youtube.com/watch?v=lfsRUCDBxiM" target="_blank">Extreme Clean With Me</a></li>
                        </ul>
                        </div>
                    </li>
                    <li><button class = "collapsible">Doodle</button>
                        <div class = "content">
                        <ul>
                            <li><a href ="https://thepetiteplanner.com/11-simple-planner-doodles-tutorial/" target="_blank">Simple Doodles to Try</a></li>
                            <li><a href ="https://www.amazon.com/Relaxing-Flowers-Coloring-Patterns-Decorations/dp/B08NS7PGY1/ref=zg_bs_11357541011_sccl_7/130-6035867-3982966?psc=1" target="_blank">Relaxing Coloring Book for Doodles</a></li>
                        </ul>
                        </div>
                    </li>
                    <li><button class = "collapsible">Brain Games</button>
                        <div class = "content">
                        <ul>
                            <li><a href="https://sudoku.com/" target="_blank">Sudoku Brain Game</a></li>
                            <li><a href="https://mahjon.gg/" target="_blank">Mahjong Brain Game</a></li>
                            <li><a href="https://www.boatloadpuzzles.com/playcrossword" target="_blank">Crossword Puzzles Brain Game</a></li>
                            <li><a href= "https://thewordsearch.com/" target="_blank">Word Searches Brain Game</a></li>
                        </ul>
                    </div>
                    </li>
                    <li><button class = "collapsible">Journaling</button>
                        <div class = "content">
                        <ul>
                            <li><a href = "https://yourvisualjournal.com/journal-prompts/" target="_blank">Journaling Prompts</a></li>
                            <li>*Link to our Journal ;)*</li>
                        </ul>
                        </div>
                    </li>
                </ul>
        
            </section>
            <section class = "websearch">
            <em><h2>Not seeing what you want? Search for more on the web!</h2></em>
            
            <div class ="container">
                <form action="https://google.com/search" target="_blank" class = "search-bar">
                    <input type="text" id="searchInput" placeholder="Search for more on the Web" name="q">
                </form>
                
            </div>
            </section>
            <section class = "helplines">
                <em><h2>Helplines and Resources</h2></em><br>
                <strong style = "color:red">If you are facing a life-threatening situation, call 911</strong>
                <ul>
                    <li><strong>National Suicide and Crisis Helpline: <a href = "tel:988">988</a> or <a href = "tel:18002738255">(1-800-273-8255)</a></strong></li>
                    <li>Natural Disaster Distress Helpline: <a href = "tel:18009855990">1-800-985-5990</a></li>
                    <li>National Child Abuse Hotline: <a href = "tel:8004224453">800-422-4453</a></li>
                    <li>National Domestic Violence Helpline: <a href = "tel:18007997233">1-800-799-7233</a></li>
                    <li>National Sexual Assault Hotline: <a href = "tel:8006564673">800-656-4673</a></li>
                    <li>Substance Abuse and Mental Health Services Administration: <a href = "tel:18006624357">1-800-662-4357</a></li>
                    <li><a href ="https://www.aa.org/">Alcohol Addiction (link to website where you can find a meeting near you)</a></li>
                </ul>
            </section>
            <section class = "doctors">
                <em><h2>Doctors to Chat With!</h2></em>
                <ul>
                    <li><button class = "collapsible">Loren A Lackman-Zeman (available for online and in person appointments)</button>
                        <div class = "content" style="background-color: rgb(226, 146, 159);">
                        <ul>
                            <li><img src="Lori.png" width="150" height="200"></li>
                            <li>Address: 44250 Dequindre Road Sterling Heights, MI 48314</li>
                            <li>Cell Phone: <a href = "tel:2489640400">248-964-0400</a></li>
                            <li><a href="https://doctors.beaumont.org/provider/Lori+A+Lackman-Zeman/923736?alias_term=Psychology&sort=relevance&specialty_synonym=Psychology.*&from=search-list#provider-details-experience">Website</a></li>
                            <div class="google-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2936.0738995386487!2d-83.0901789!3d42.6173887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824c2d81494fab7%3A0x67235a2947bfb7c9!2s44250%20Dequindre%20Rd%2C%20Sterling%20Heights%2C%20MI%2048314!5e0!3m2!1sen!2sus!4v1681960007051!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </ul>
                        </div>
                    </li>
                    
                    <li><button class = "collapsible">John Francis O'Leary, PhD</button>
                        <div class = "content" style="background-color: rgb(226, 146, 159);">
                        <ul>
                            <li><img src="john.png" width="150" height="200"></li>
                            <li>Address: 1949 12 Mile Road, Suite 100 Berkley, MI 48072</li>
                            <li>Cell Phone: <a href = "tel:2485510615">248-551-0615</a></li>
                            <li><a href="https://doctors.beaumont.org/provider/John+Francis+O'Leary/923732?alias_term=Psychology&sort=relevance&specialty_synonym=Psychology.*&from=search-list">Website</a></li>
                            <div class="google-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2941.454264592637!2d-83.1773339!3d42.503153499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824c8a7bbe6f30f%3A0xc430cdb0a4df5884!2s1949%20Twelve%20Mile%20Rd%20%23100%2C%20Berkley%2C%20MI%2048072!5e0!3m2!1sen!2sus!4v1682014893162!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </ul>
                        </div>
                    </li>
                    
                    <li><button class = "collapsible">Jomo Thomas, LMFT</button>
                        <div class = "content" style="background-color: rgb(226, 146, 159);">
                        <ul>
                            <li><a href = "https://www.zocdoc.com/professional/jomo-thomas-lmft-326062?LocIdent=189728&dr_specialty=387&insuranceCarrier=-1&insurancePlan=-1&isNewPatient=true&reason_visit=3009">Website to Book Appointment</a></li>
                        </ul>
                        </div> 
                    </li>
                </ul>
            </section>
        </div>

    
 


 
    <script src = "links.js"></script> 

        
        
        <footer>
        
            <p><small>All content copyright &copy; 2023, HelpingHand</small></p>
        
        </footer>
        </body>
        </html>
        