<x-layout>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css" >
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <section id="contact">
        <div class="contact main-container">
            <div class="contact-left">
                <form class="contact-form" action="https://formspree.io/f/mpzgekkb" method="post">
                    <div>
                        <input type="text" placeholder="Name" name="Name">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="Email" id="">
                    </div>
                    <div>
                        <textarea name="message" placeholder="Message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <button class="btn-submit">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="contact-right">

                <!--contact 1-->
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M16 22.621l-3.521-6.795c-.007.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.082-1.026-3.492-6.817-2.106 1.039c-1.622.845-2.298 2.627-2.289 4.843.027 6.902 6.711 18.013 12.212 18.117.575.011 1.137-.098 1.677-.345.121-.055 2.102-1.029 2.11-1.033zm4-5.621h-1v-13h1v13zm-2-2h-1v-9h1v9zm4-1h-1v-7h1v7zm-6-1h-1v-5h1v5zm-2-1h-1v-3h1v3zm10 0h-1v-3h1v3zm-12-1h-1v-1h1v1z"/></svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>Phone number</h4>
                        <p>(+62)857-7746-2326</p>
                    </div>
                </div>

                <!--contact 2-->
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 9.062s-5.188-.333-7 1.938c2-4.896 7-5.938 7-5.938v-2l5 4-5 4.019v-2.019zm-18.974 14.938h23.947l-11.973-11.607-11.974 11.607zm1.673-14l10.291-7.488 3.053 2.218c.712-.459 1.391-.805 1.953-1.054l-5.006-3.637-11.99 8.725v12.476l7.352-7.127-5.653-4.113zm15.753 4.892l6.548 6.348v-11.612l-6.548 5.264z"/></svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>Email</h4>
                        <p>dedeafi20070713@gmail.com</p>
                        <p>annaafimuhammadaditya
                            @smkwikrama.sch.id</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>