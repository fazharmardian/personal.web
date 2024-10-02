<x-layout>
    <div class="d-flex position-sticky bg-black" style="min-height: 50vh; background-attachment: fixed">
        <div class="container scroll-animate-down">
            <div class="d-flex justify-content-center align-items-center flex-column flex-lg-row"
                style="min-height: 100%">
                <div class="w-50 w-lg-50 text-center text-lg-start">
                    <h1 class="text-warning text-center" style="font-size: 3rem; font-weight: 900;">
                        My Projects
                    </h1>
                    <h2 class="text-center text-light">Explore My Work</h2>
                    <p class="text-secondary text-center">
                        As a dedicated student at Bakti Nusantara 666 Vocational High School, I've immersed myself in
                        the world of programming. Over the past three years, I've developed skills in both web and
                        mobile development, working on diverse projects that showcase my passion and growth in this
                        field.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-black py-5">
        <div class="container">
            <div class="row">

                <div class="col-12 mb-5 scroll-animate-right">
                    <div class="rounded-2 d-flex flex-column flex-lg-row align-items-start"
                        style="background-color: #1f2022; padding: 20px;">
                        <img src="{{ asset('storage/assets/broke.png') }}" alt="CraftnRent"
                            class="img-fluid mb-3 mb-lg-0" style="width: 100%; max-width: 500px; object-fit: cover;">
                        <div class="text-light px-5">
                            <h2>UrNote</h2>
                            <span class="d-block mb-2 text-warning">Note Taking Application</span>
                            <p>
                                <strong>UrNote</strong> is a versatile note-taking application designed to help users
                                organize and manage their notes seamlessly across multiple platforms. Available as both
                                a
                                web and mobile application, UrNote provides a robust environment for capturing and
                                organizing thoughts, tasks, and important information.
                            </p>
                            <p><strong>Features:</strong></p>
                            <ul>
                                <li><strong>Web Application (PHP):</strong> The web version of UrNote, developed using
                                    PHP,
                                    offers a comprehensive interface for creating, editing, and organizing notes. It
                                    includes features like categorization, tagging, and search functionality for
                                    efficient
                                    note management.</li>
                                <li><strong>Mobile Application (Flutter):</strong> The mobile app, built with Flutter,
                                    ensures that users can access and update their notes from anywhere, at any time. It
                                    provides a smooth and responsive experience on both Android and iOS devices,
                                    allowing
                                    for easy note-taking on the go.</li>
                            </ul>
                            <p><strong>Benefits:</strong></p>
                            <ul>
                                <li><strong>Cross-Platform Synchronization:</strong> UrNote ensures that all notes are
                                    synchronized across both web and mobile platforms, providing a seamless experience
                                    regardless of the device used.</li>
                                <li><strong>Enhanced Organization:</strong> With features such as note categorization
                                    and
                                    tagging, users can easily organize their notes and quickly find the information they
                                    need.</li>
                                <li><strong>User-Friendly Interface:</strong> The application is designed with a clean
                                    and
                                    intuitive interface, making it easy for users to manage their notes and stay
                                    organized
                                    without any hassle.</li>
                            </ul>
                            <p><strong>Conclusion:</strong></p>
                            <p>
                                UrNote is an essential tool for anyone looking to keep their notes and tasks organized
                                across multiple devices. Its dual-platform availability and comprehensive feature set
                                make
                                it a reliable solution for managing information efficiently, whether at work, school, or
                                home.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 mb-4">
                    <div class="rounded-2 p-4 d-flex flex-column flex-md-row align-items-start scroll-animate-left"
                        style="background-color: #1f2022">
                        <div class="text-light px-5 pt-3 order-2 order-md-1">
                            <h2>Dawn Society</h2>
                            <span class="d-block mb-2 text-warning">Forum Website</span>
                            <p>
                                <strong>Dawn Society</strong> is a straightforward forum application built with Laravel,
                                designed to create a dynamic space for online discussions and community engagement. This
                                platform provides a user-friendly interface that simplifies the process of initiating
                                and participating in conversations.
                            </p>
                            <p><strong>Features:</strong></p>
                            <ul>
                                <li><strong>Discussion Threads:</strong> Users can start new discussion threads and
                                    reply to existing ones, facilitating interactive and engaging conversations.</li>
                                <li><strong>User Profiles:</strong> Each user can create and manage their profile,
                                    including personal information and preferences, enhancing the personalized
                                    experience.</li>
                                <li><strong>Moderation Tools:</strong> Admins have access to tools for moderating
                                    content, managing users, and maintaining the forum's integrity and safety.</li>
                            </ul>
                            <p><strong>Benefits:</strong></p>
                            <ul>
                                <li><strong>Community Building:</strong> Dawn Society encourages interaction and
                                    collaboration among users, fostering a sense of community and shared interest.</li>
                                <li><strong>Ease of Use:</strong> With its clean and intuitive design, the platform is
                                    accessible to users of all technical levels, ensuring a smooth experience.</li>
                                <li><strong>Customization:</strong> The application allows for customization in terms of
                                    design and functionality, enabling it to fit various community needs and branding
                                    requirements.</li>
                            </ul>
                            <p><strong>Conclusion:</strong></p>
                            <p>
                                Dawn Society is more than just a forum; it is a robust platform designed to facilitate
                                meaningful conversations and build online communities. With its straightforward design
                                and comprehensive feature set, it offers an effective solution for those looking to
                                create a space for discussion and interaction.
                            </p>
                        </div>
                        <img src="{{ asset('storage/assets/dawn_three.png') }}" alt="Not Loaded"
                            class="img-fluid order-1 order-md-2 pt-sm-3"
                            style="width: 100%; max-width: 400px; object-fit: cover;">
                    </div>
                    <div class="mt-4">
                        <h3 class="text-light py-3" style="font-size: 3rem">Gallery</h3>
                        <div class="row">
                            <div data-aos="fade-up" data-aos-duration="2000" class="col-12 col-md-4 mb-3">
                                <img src="{{ asset('storage/assets/dawn_three.png') }}" alt="CraftnRent Screenshot 1"
                                    class="img-fluid" style="width: 100%; object-fit: cover;">
                            </div>
                            <div data-aos="fade-up" data-aos-duration="2000" class="col-12 col-md-4 mb-3">
                                <img src="{{ asset('storage/assets/dawn_two.png') }}" alt="CraftnRent Screenshot 2"
                                    class="img-fluid" style="width: 100%; object-fit: cover;">
                            </div>
                            <div data-aos="fade-up" data-aos-duration="2000" class="col-12 col-md-4 mb-3">
                                <img src="{{ asset('storage/assets/dawn_one.png') }}" alt="CraftnRent Screenshot 3"
                                    class="img-fluid" style="width: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-5">
                    <div class="rounded-2 d-flex flex-column flex-lg-row align-items-start scroll-animate-right"
                        style="background-color: #1f2022; padding: 20px;">
                        <img src="{{ asset('storage/assets/craftnrent.jpeg') }}" alt="CraftnRent"
                            class="img-fluid mb-3 mb-lg-0" style="width: 100%; max-width: 500px; object-fit: cover;">
                        <div class="text-light p-3 order-2 order-lg-1">
                            <h2>CraftnRent</h2>
                            <span class="d-block mb-2 text-warning">Inventory Management System</span>
                            <p>
                                <strong>CraftnRent</strong> is an innovative inventory management application
                                meticulously designed to handle and streamline school resources. This dual-platform
                                solution—available as both a web application and a mobile app—serves as a comprehensive
                                tool for educators, administrators, and students to efficiently manage school inventory.
                            </p>
                            <p><strong>Features:</strong></p>
                            <ul>
                                <li><strong>Web Application (PHP):</strong> The web version of CraftnRent is built using
                                    PHP, offering a powerful and scalable platform for managing school resources. It
                                    includes features such as item tracking, usage reporting, and inventory updates,
                                    making it easier for users to maintain accurate records and efficiently allocate
                                    resources.</li>
                                <li><strong>Mobile Application (Flutter):</strong> The mobile app version, developed
                                    with Flutter, provides a user-friendly and responsive experience on both Android and
                                    iOS devices. It allows users to manage and check inventory on-the-go, ensuring
                                    seamless accessibility and real-time updates wherever they are.</li>
                            </ul>
                            <p><strong>Benefits:</strong></p>
                            <ul>
                                <li><strong>Efficiency and Convenience:</strong> CraftnRent simplifies the process of
                                    managing school inventory by consolidating all functions into one platform. Users
                                    can easily track items, update inventory statuses, and generate reports with just a
                                    few clicks or taps.</li>
                                <li><strong>Cross-Platform Access:</strong> The availability of both web and mobile
                                    applications ensures that users can access CraftnRent from any device, whether they
                                    are at their desk or on the move. This flexibility enhances productivity and
                                    facilitates better management of resources.</li>
                                <li><strong>Scalability and Customization:</strong> Designed with scalability in mind,
                                    CraftnRent can adapt to the needs of different educational institutions.
                                    Customizable features and settings allow schools to tailor the application to their
                                    specific requirements.</li>
                            </ul>
                            <p><strong>Conclusion:</strong></p>
                            <p>
                                CraftnRent is more than just an inventory management system; it is a comprehensive
                                solution designed to improve efficiency and organization within educational
                                institutions. By integrating advanced technology and user-centric design, CraftnRent
                                empowers schools to manage their resources effectively and focus on what truly
                                matters—enhancing the educational experience.
                            </p>
                        </div>
                    </div>

                    <!-- Gallery Section -->
                    <div class="mt-4">
                        <h3 class="text-light py-3" style="font-size: 3rem">Gallery</h3>
                        <div class="row">
                            <div data-aos="fade-up" data-aos-duration="2000" class="h-50 col-12 col-md-4 mb-3 ">
                                <img src="{{ asset('storage/assets/craftnrent_three.png') }}" alt="CraftnRent Screenshot 3"
                                    class="img-fluid" style="width: 100%; object-fit: contain;">
                            </div>
                            <div data-aos="fade-up" data-aos-duration="2000" class="col-12 col-md-4 mb-3">
                                <img src="{{ asset('storage/assets/craftnrent_one.png') }}" alt="CraftnRent Screenshot 1"
                                    class="img-fluid" style="width: 100%; object-fit: cover;">
                            </div>
                            <div data-aos="fade-up" data-aos-duration="2000" class="col-12 col-md-4 mb-3">
                                <img src="{{ asset('storage/assets/craftnrent_two.png') }}" alt="CraftnRent Screenshot 2"
                                    class="img-fluid" style="width: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <x-footer />
</x-layout>
