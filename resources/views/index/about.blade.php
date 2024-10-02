<x-layout>
    <div class="d-flex flex-column bg-dark text-light py-5 my-2">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center">
                <div class="w-100 w-md-50 text-center text-md-start mb-4 mb-md-0 scroll-animate-left">
                    <h1 class="text-warning" style="font-size: 2.5rem; font-weight: 700">
                        About Me
                    </h1>
                    <h2 class="text-secondary">WEB & MOBILE DEVELOPER</h2>
                    <p class="mt-3">
                        I am an enthusiastic programmer currently pursuing my studies at Bakti Nusantara 666 Vocational
                        High School. Over the past three years, I have honed my skills in web and mobile development
                        through a variety of projects, focusing on creating efficient and user-friendly applications.
                    </p>
                    <p>
                        My journey has been driven by a passion for technology and a commitment to continuous learning.
                        Whether it's developing responsive websites or crafting intuitive mobile apps, I strive to
                        deliver high-quality solutions that address real-world needs.
                    </p>
                </div>
                <div class="d-flex justify-content-center align-items-center w-100 w-lg-50 mt-4 mt-lg-0 scroll-animate-right"
                    style="min-height: 100%;">
                    <div class="position-relative rounded-5 yellow-border"
                        style="margin: 2rem; padding: 20px; box-sizing: border-box; background-color: #1f2022">
                        <div class="bg-light rounded-5 inner-image-container"
                            style="padding: 0; width: 100%; height: 100%;">
                            <img class="rounded-5 profile-image" src="https://i.ibb.co.com/0rfCnLh/wowee.png"
                                alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-black text-light py-5">
        <div class="container">
            <h2 class="text-warning text-center mb-4 scroll-animate-up">More About Me</h2>
            <div class="row">
                <div class="col-md-6 mb-4 scroll-animate-up">
                    <h3>Skills & Expertise</h3>
                    <ul>
                        <li>Web Development: HTML, CSS, JavaScript, PHP, Laravel</li>
                        <li>Mobile Development: Flutter, Dart</li>
                        <li>Database Management: MySQL, Firebase</li>
                        <li>Game Developement: Godot</li>
                        <li>UI/UX Design: Figma</li>
                    </ul>
                </div>
                <div class="col-md-6 mb-4 scroll-animate-up">
                    <h3>Educational Background</h3>
                    <p>
                        I am currently studying at Bakti Nusantara 666 Vocational High School, focusing on Computer
                        Science. My education has provided me with a solid foundation in programming and development,
                        preparing me for real-world challenges.
                    </p>
                </div>
            </div>
            <div class="text-center scroll-animate-up">
                <h3 class="text-warning mb-3">Achievements</h3>
                <p>
                    I am proud to have won second place in the IT Software Solution for Business contest. The competition was held over two days.
                </p>
                <p>
                    This achievement reflects my ability to work across different platforms and technologies to deliver effective solutions.
                </p>
            </div>
        </div>
    </section>
    
    <section class="bg-dark text-light py-5">
        <div class="container">
            <h2 class="text-warning text-center mb-4 scroll-animate-down">Contact Me</h2>
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0 scroll-animate-left">
                    <h3 class="text-warning mb-3">Connect with Me</h3>
                    <p class="mb-4">Feel free to reach out to me through any of the following social media platforms or via email. I’d be happy to connect, collaborate, or just chat!</p>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <p class="text-light" target="_blank">
                                <span class="icon-twitter me-2"></span> Twitter : @inee
                            </p>
                        </li>
                        <li class="mb-2">
                            <p class="text-light" target="_blank">
                                <span class="icon-facebook me-2"></span> Github : fazharmardian
                            </p>
                        </li>
                        <li class="mb-2">
                            <p class="text-light" target="_blank">
                                <span class="icon-instagram me-2"></span> Instagram : @dawnsthere8
                            </p>
                        </li>
                        <li class="mb-2">
                            <p class="text-light">
                                <span class="icon-envelope me-2"></span> Email : fajarberak77@gmail.com
                            </p>
                        </li>
                    </ul>
                </div>
                
                
                <div class="col-md-6 scroll-animate-right">
                    <form action="#" method="post" class="bg-light text-dark p-4 rounded-3 shadow-lg">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning text-dark py-2 px-4">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    

    <x-footer />
</x-layout>
