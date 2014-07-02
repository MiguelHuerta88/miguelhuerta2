<div class="body">
    <div id="project-label">
        <div id="project-text">Projects</div>
    </div>
        <!-- BEGIN LISTING PROJECTS -->
        <div class="project-list">
            <h2>Software Engineering Project</h2>
            <p>
            	During my Software Engineering course, we were given the assignment of creating an online
                banking system interface. For this project I was the Website Administrator. My duties
                were to make sure that the site was running correctly at all times, go over code to
                check that it goes along with our guidelines, and help out my other group members
                with anything they needed. I took down the site once the course was over because it
                was not generating traffic. I still have all of the code save on file in case I ever
                want to put the site back up permanently.
             </p>
             
             <h2> ThrowDown Cycling Website</h2>
             <p>
             	Just recently I began developing a website for my friends upcoming clothing brand.
                The name of the clothing label is ThrowDown Clothing, it's more of an urban brand. 
                Most of the influences for the shirts are from art and hip hop music. I developed the
                site using PHP, CSS, and HTML. I plan on adding a merchandise page along with
                all of the different selection of shirts that are going to be available. I also plan on
                adding a links page to different links. All of this is going to be done soon in the future
                , I just have to sit down with my friend to plan out how and when we will begin working
                on sections. At the moment the site is currently on hiatus. I will try to update the site
                by adding some of the new tools I have picked up at my current internship. I plan on adding
                an admin section to the site and also develop a shopping cart, so people could shop. Hopefully, 
                soon I can begin implementing these features. To view the current site as is visit 
                <a href="http://www.tdclothing.co.nf" target="__blank">ThrowDown Clothing </a>
               </p>
               
              <h2>Senior Design Project</h2>
              <p>
              	For my Senior Design Course at school, I developed a Java Application for managing 
                gardening customers. My father has a gardening business and I wanted to design an
                application that will make managing his customers much easier. The application
                is standalone, which means that it can run on any computer as long as you have
                the Java runtime environment present. The application can add and delete customers.
                It can also search for any particular customer that is currently in the application at the
                time. There are two different ways to search, either by the address or by the owner name.
                The application can also view, and make payments to keep track of the monthly checks that
                arrive. Some of the more important functions are that the application can print monthly
                bills, along with envelope labels for the customers on evelope label paper. Finally 
                you can also save and read in file that store all of the information that you added to the
                application. You can download the Jar file under the <b>Download</b> section
                </p>
                
                <h2>Internet Brands Analytics Tool</h2>
                <p>
                 At my current internship I began developing a tool that would be used by all of the employees at
                 the company. With the guidance of my manager I gathered my task that needed to be completed. The 
                 task at first were simple, but as more and more ideas began to be developed the project increased in difficulty.
                 At the moment the project uses MySQL, PHP, jQuery, CSS and Javascript. The Analytics tool stores approximately 474 different
                 sites that Internet Brands either owns or manages. Each site has a relationship to a parent Account. Many sites can have the same 
                 parent. The Accounts table just stores all of our accounts that are used for Google Analytics. This was my first task that
                 I had to complete before moving forward.
                </p>
                <p>
                 Once, I had all the sites properly linked up to their appropriate Account I was able to begin gathering different Google
                 Analytics Metrics. With the help of an open source PHP script named G.A.P.I (Google Analytics PHP Interface) I was able to
                 begin gathering data quick. I gather about 24 different metrics which are gathered with a daily cron jobs that runs daily
                 at around 12:30 pm. As the cron job runs each of the metrics are stored in another table name Traffic. The primary key 
                 for the traffic table is the siteId, and Date for which the row was inserted. Emails are also sent out daily based on how
                 the site is doing based on both Monthly Standard deviation and Day of the Week Standard Deviation. A valid user 
                 mechanism was established that allows anyone in the company to click on a site and add themselves to the email list.
                 These are some of the many features that the tool is capable of doing.
                </p>
                <p>
                 The users can also generate 4 different types of reports currently. They can either generate a Google Traffic comparison
                 report. This report prompts the user for two valid date ranges and then spits out a table with the sum of google traffic
                 per site for each range. Another column we also calculate the growth and percentage difference for the traffic. We finish 
                 the report off by summing up each site per vertical and displaying the same table with sum, growth and difference. Another 
                 report that is generated is a monthly dashboard report that the finance department previously generated using Excel. 
                 The report allows the user to select the range for the dashboard. In the backend we take those two dates and then calculate
                 distinct months. We then get the starting and ending dates for each month and run a function towards the database to get our data
                 back. The data we display is Visits, Monthly Pageviews, Unique Visitors, Mobile Visits, Tablet Visits and a few more metrics.
                 At the moment this is as far as I have gotten with the project. I have a few more features to add, but have put those aside 
                 to work on another project dealing with car reviews using Wordpress.
                </p>
        </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    $("#projects").css('color','#fff');
</script>