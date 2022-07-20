@extends('layouts.master')
@php
use Carbon\Carbon;
@endphp
@section('content')
    <div id="landing" class="pt-5 bg-secondary" style="height: 700px;">
        <div class="container" style="padding-top: 200px">
            <div class="row" data-aos="fade-left" data-aos-offset="200" data-aos-duration="800" data-aos-easing="ease-in-out">
                <div class="col-md-12 text-center">
                    <h1 class="pb-2 fs-1 fw-bold">Ahmad Giofadhil</h1>
                    <h2 class="fs-5 pb-5">Full - Stack Laravel Developer in Cibubur, Jawa Barat.</h2>
                    <div id="button" class="pt-5">
                        <a id="download" href="{{ route('resume') }}" class="btn btn-dark rounded-pill fs-6 py-1 my-1" style="width: 150px"><i class="fa-solid fa-download fa-fw"></i> Resume</a>
                        <a class="btn  btn-dark rounded-pill fs-6 py-1 my-1" onclick="Notready()" style="width: 150px"><i class="bi bi-chat-quote"></i> Anonymous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="timeline" class="my-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 text-center">
                    <h2 class="fs-4">Timeline</h2>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>

        <div class="container" data-aos="fade-up" data-aos-offset="200" data-aos-duration="800" data-aos-easing="ease-in-out">
            <div class="row">
                <div class="col-6 px-4 text-end border-end">
                    <div class="timeline-wrapper">
                        <img class="rounded-circle" src="/gundar.png" width="40" height="40" alt="Gunadarma">
                        <h2 class="fs-4 fw-bold mt-2">Gunadarma University</h2>
                        <h5 class="fs-6">Student</h5>
                    </div>
                </div>
                <div class="col-6 px-4 position-relative">
                    <div class="icon-wrapper position-absolute" style="margin-left: -32px; margin-top: -5px">
                        <i class="bi bi-airplane"></i>
                    </div>
                    <div class="timeline-wrapper">
                        <h6 class="fs-8"><span class="px-3 bg-secondary text-success fw-bold py-2 rounded-pill">Sept 2017 - Aug 2021</span></h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" data-aos="fade-up" data-aos-offset="200" data-aos-duration="800" data-aos-easing="ease-in-out">
            <div class="row">
                <div class="col-6 px-4 text-end border-end" style="padding-top: 100px; padding-bottom: 100px">
                    <div class="timeline-wrapper">
                        <h6 class="fs-8"><span class="px-3 bg-secondary text-success fw-bold py-2 rounded-pill">Oct 2021 - Present</span></h6>
                    </div>
                </div>
                <div class="col-6 px-4" style="padding-top: 100px; padding-bottom: 100px">
                    <div class="icon-wrapper position-absolute" style="margin-left: -32px; margin-top: -5px">
                        <i class="bi bi-airplane"></i>
                    </div>
                    <div class="timeline-wrapper">
                        <img src="/avirtech.png" width="40" height="30" alt="avirtech">
                        <h2 class="fs-4 mt-2 fw-bold">Avirtech Indonesia</h2>
                        <h5 class="fs-6">Laravel Developer</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" data-aos="fade-up" data-aos-offset="200" data-aos-duration="800" data-aos-easing="ease-in-out">
            <div class="row">
                <div class="col-6 pb-3 px-4 text-end border-end">
                    <div class="timeline-wrapper">
                        <img class="rounded-circle" src="/upwork.png" width="40" height="40" alt="upwork">
                        <h2 class="fs-4 fw-bold mt-2">Upwork Global</h2>
                        <h5 class="fs-6">Laravel Developer</h5>
                    </div>
                </div>
                <div class="col-6 pb-3 px-4">
                    <div class="icon-wrapper position-absolute" style="margin-left: -32px; margin-top: -5px">
                        <i class="bi bi-airplane"></i>
                    </div>
                    <div class="timeline-wrapper">
                        <h6 class="fs-8"><span class="px-3 bg-secondary text-success fw-bold py-2 rounded-pill">Jun 2022 - Present</span></h6>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="projects" class="py-5 bg-secondary text-dark">
        <div class="container py-3" data-aos="fade-up" data-aos-offset="200" data-aos-duration="800" data-aos-easing="ease-in-out">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fs-4 pb-5 text-center">Latest Works</h2>
                    <div class="row">
                        <div class="col-md-4 py-4">
                            <div class="img-wrapper p-1 bg-white rounded shadow-lg">
                                <img src="/avircomms_project_carousel.png" alt="" class="border-white w-100">
                            </div>
                            <div id="body-wrapper" class="my-3">
                                <span class="text-decoration-none">Avircomms Chat Web Program</span>
                            </div>
                        </div>
                        <div class="col-md-4 py-4">
                            <div class="img-wrapper p-1 bg-white rounded shadow-lg">
                                <img src="/biota_project_carousel.png" alt="" class="border-white w-100">
                            </div>
                            <div id="body-wrapper" class="my-3">
                                <span class="text-decoration-none">Biota Admin Dashboard</span>
                            </div>
                        </div>
                        <div class="col-md-4 py-4">
                            <div class="img-wrapper p-1 bg-white rounded shadow-lg">
                                <img src="/ioiofadhil_project_carousel.png" alt="" class="border-white w-100">
                            </div>
                            <div id="body-wrapper" class="my-3">
                                <a href="" class="text-decoration-none text-dark io">Ahmad Giofadhil Portofolio</a>
                            </div>
                        </div>
                        <div class="col-md-4 py-4">
                            <div class="img-wrapper p-1 bg-white rounded shadow-lg">
                                <img src="/avirtech_project_carousel.png" alt="" class="border-white w-100">
                            </div>
                            <div id="body-wrapper" class="my-3">
                                <a href="https://avirtech.co" class="text-decoration-none text-dark io">PT. Sky Tech Indonesia Website</a>
                            </div>
                        </div>
                        <div class="col-md-4 py-4">
                            <div class="img-wrapper p-1 bg-white rounded shadow-lg">
                                <img src="/wangsa_project_carousel.png" alt="" class="border-white w-100">
                            </div>
                            <div id="body-wrapper" class="my-3">
                                <a href="https://kopiwangsa.netlify.app/index.html" class="text-decoration-none text-dark io">Cafe Company Profile Website Template</a>
                            </div>
                        </div>
                        <div class="col-md-4 py-4">
                            <div class="img-wrapper p-1 bg-white rounded shadow-lg">
                                <img src="/gio_project_carousel.png" alt="" class="border-white w-100">
                            </div>
                            <div id="body-wrapper" class="my-3">
                                <a href="https://ioiofadhil.netlify.app/" class="text-decoration-none text-dark io">My First Portofolio</a>
                            </div>
                        </div>
                        <div class="col-md-4 py-4">
                            <div class="img-wrapper p-1 bg-white rounded shadow-lg">
                                <img src="/mqtt_project_carousel.png" alt="" class="border-white w-100">
                            </div>
                            <div id="body-wrapper" class="my-3">
                                <a class="text-decoration-none text-dark">MQTT Listener</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="py-5 bg-white">
        <form id="my-form" action="https://formspree.io/f/mqknleel" method="POST">
            <div class="container py-3">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <p id="my-form-status" class="alert alert-success d-none text-center"></p>
                        <h2 class="fs-4 pb-5 text-center" data-aos="fade-up" data-aos-offset="200" data-aos-duration="800" data-aos-easing="ease-in-out">Let's get in touch</h2>
                        <div class="row" data-aos="fade-up" data-aos-offset="200" data-aos-duration="800" data-aos-easing="ease-in-out">
                            <div class="col-md-6"><label class="form-label">First Name</label>
                                <input name="firstname" class="form-control" placeholder="e.g : Ahmad">
                                <div class="form-text">
                                    Contains your first name.
                                </div>
                            </div>
                            <div class="col-md-6"><label class="form-label">Last Name</label>
                                <input name="lastname" class="form-control" placeholder="e.g : Giofadhil">
                                <div class="form-text">
                                    Contains your last name.
                                </div>
                            </div>
                            <div class="col-md-12 py-3"><label class="form-label">Message</label>
                                <textarea name="message" class="form-control" placeholder="Hi, Gio! Let's collab!" rows="6"></textarea>
                                <div class="form-text">
                                    Contains your message.
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-dark rounded-pill fs-6 py-1 my-1">Send</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        var form = document.getElementById("my-form");

        async function handleSubmit(event) {
            event.preventDefault();
            var status = document.getElementById("my-form-status");
            var data = new FormData(event.target);
            fetch(event.target.action, {
                method: form.method,
                body: data,
                headers: {
                    'Accept': 'application/json'
                }
            }).then(response => {
                $('#my-form-status').removeClass('d-none');
                if (response.ok) {
                    status.innerHTML = "Message was sent!";
                    form.reset()
                } else {
                    response.json().then(data => {
                        if (Object.hasOwn(data, 'errors')) {
                            status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
                        } else {
                            status.innerHTML = "Oops! There was a problem submitting your form"
                        }
                    })
                }
            }).catch(error => {
                status.innerHTML = "Oops! There was a problem submitting your form"
            });
        }
        form.addEventListener("submit", handleSubmit)
    </script>
@endsection
