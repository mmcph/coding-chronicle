# coding-chronicle
Personal website project for Deep Dive Coding Bootcamp

### Milestone 1 Feedback
Great idea for your PWP - I like the personal focus. Your words "creativity, adaptability and personality" really stood out to me, and I'm looking forward to seeing your content and design ideas take shape in the next phase. 

It sounds like your ideas for this project may likely expand beyond the scope of PWP in the future, but think of this as a first iteration/working prototype. Based on what I read here, you may really benefit from a proper blogging platform which is beyond the scope of this tiny little project.

Your project and files are all set up to spec and your code looks great - nice work.

Your Milestone 1 passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You are now clear to begin work on Milestone 2&alpha;.

#### Edits &amp; Suggestions
- Best practice for UX is to have external links load in a new tab. Add `target="_blank"` to the `<a>` tag. (And yeah... Chim Richalds totally made me LOL!)

### Milestone 2a Feedback
Unfortunately there are some big problems here: 
- There are no Mobile Wireframes included. 
- The required Contact Form is not included in the wireframes presented.
- Git commit/push history is out of sync with what is uploaded on the server and the last commit was 13 days ago. 
- Wireframe image(s) are not in the repository. 

Because the above are missing/not in line with project specs - I cannot pass this Milestone as is, and it only qualifies for [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/) status.

The content strategy here is highly technical, and I think it will suffice for this project, but I will  note here that documented content strategies in industry are more nuanced and complex than this and take a more "holistic" approach. I realize that we don't approach this topic at anything beyond the most introductory level in this class, but I think you are at the level where you could have challenged yourself a bit further in this area. For more insight see: https://www.usability.gov/what-and-why/content-strategy.html

Please refer to the project specs here for instructions, and complete all revisions by Thursday 5/10 8:00am and I'll bump your grade to Tier II: 
- https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/ 
- Sample Milestones: https://bootcamp-coders.cnm.edu/projects/personal/example/

#### Update Milestone 2a Feedback
Thanks for getting back to me and updating your docs. What I see here will provide you with a decent guide for your development phase. As I noted earlier (and I know you're aware) - please plan to include a contact form in your project. 

In the header region I see a few notable differences between Mobile and Desktop - I think these can be easily handled with some `@media` queries, no problemo. I encourage you to apply these in a true mobile-first/progressive enhancement fashion. 

I'd be careful of image scaling on smaller screens - they might take up just a bit too much screen "real-estate" at the scale they're represented here. When working with images, it's best that they be scaled and sized appropriately for web before importing them into the project.

This simple and clean UI concept should be a breeze to create using the Bootstrap framework - so I challenge you to really go for a professional-level presentation and polish using CSS. Since you're coming into this class with previous CSS experience, if you'd like to experiment with SASS on this project as well, that's also an option I'd like to extend to you. The [Codrops](https://tympanus.net/codrops/) blog is a great source of inspiration for UI design and effects, and some cool things can be done with [Waypoints](http://imakewebthings.com/waypoints/) and [Animate.css](https://daneden.github.io/animate.css/) together. Just some ideas.

Last but not least, [FontAwesome](https://fontawesome.com/) is a good quality free library for including iconography. Custom icons are also an option too - of course.

As I'm sure you're aware, a project like this would really be best suited to a proper blogging platform like WordPress, Drupal, Ghost, Anchor or others. But unfortunately that's out-of-scope for this tiny project.

You may want to read ahead regarding the contact form integration - and that documentation is here: https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/

Your Milestone 2a passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You are clear to begin development on your PWP.

**We'll be building PWP in a file named index.php inside of /public_html**. Please note that no publicly-accessible site files should live outside of the /public_html directory. Remember use an organized and standards-compliant directory structure to house all images, JavaScript, CSS, etc. We are done with the /documentation directory for now!

### Milestone 2b Feedback
Nice work on PWP - this is looking great. Meeting notes left via Slack. Your Milestone 2b passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

### PWP Final Feedback
Congratulations on an excellent PWP. What you have here is beautiful and well-executed. As I've said before - this project is much better suited to a proper blogging platform/CMS (WordPress, Ghost, Drupal, etc. Many to choose from.). Custom theme templating for a CMS is a logical next step in front-end learning - you may want to give this a shot. You're beyond ready for more front-end material, and I encourage you to keep challenging yourself.

*Code Base*: Overall your code looks great. I did find some errors, see below. These can also be found by using https://validator.w3.org.
- The `<ul>` is unclosed down by line 70.
- There are duplicate ids: `contentTitle` and `posts`. Generally speaking, use classes for styling.
- Always use `alt` attributes on your images.

*Git Commits*: Nice work with version control - your Git/GitHub history is sufficient and detailed.

*Mobile-First Responsiveness*: I've tested your page using devtools, Chrome on Linux, and Chrome & Firefox on Android. Your layout responds nicely across all platforms and is attractive and use-friendly on mobile - nice work. I lose the background image on the mobile browsers however, but this is a minor background image positioning issue ofr narrow screens (the image is there and being applied, just hiding behind the gradient). There also appears to be a little quirk with a gap the background color down at the bottom of the browser on Android Chrome, on scroll. This could be a webkit quirk... try writing the selector as `html, body` on line 1 in your CSS... that may help.

*Design, Content, &amp; Overall Presentation*: What you've created meets a professional standard of quality and design - very nice work. Your content is interesting and engaging - I've thoroughly enjoyed reading about your experiences in the Bootcamp. Keep up the good work. Maybe consider lightening the content text color just a tiny bit... the contrast ratio between the text and backgrond color is a bit low. Increasing the contrast here would make the text a bit easier to read.

*Contact Form*: This appears to work correctly from my end - check to see if you received my test message.

Your PWP passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Your cumulative PWP score including all Milestones is 36/40 points (90%).

- Milestone 1 - 20%: Tier IV 40(0.2) = 8
- Milestone 2a - 20%: Tier II 20(0.2) = 4
- Milestone 2b - 10%: Tier IV 40(0.1) = 4
- Milestone 3 - 50%: Tier IV 40(0.5) = 20
