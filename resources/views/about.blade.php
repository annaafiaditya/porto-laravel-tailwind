<x-layout>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css" >
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <section id="skills">
        <div class="skill main-container">
            <h3 class="pre-title">Learning Path</h3>
            <h1 class="section-title">Skills & Pendidikan</h1>

            <div class="skills-grid">
                <div class="skills-left">
                    <!--education 1-->
                    <div class="education">
                        <div class="line">
                            <div></div>
                        </div>
                        <div class="education-info">
                            <h4 class="education-title">SDN Siliwangi</h4>
                            <h3 class="education-years">2023-2025</h3>
                            <p>Menjenjang pendidikan di SDN Siliwangi 
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, numquam.
                            </p>
                            
                        </div>
                    </div>
                    <!--education 2-->
                    <div class="education">
                        <div class="line">
                            <div></div>
                        </div>
                        <div class="education-info">
                            <h4 class="education-title">SMK WIKRAMA</h4>
                            <h3 class="education-years">2023-2025</h3>
                            <p>Menjenjang pendidikan di</p>
                        </div>
                    </div>
                    <!--education 3-->
                    <div class="education">
                        <div class="line">
                            <div></div>
                        </div>
                        <div class="education-info">
                            <h4 class="education-title">SMK WIKRAMA</h4>
                            <h3 class="education-years">2023-2025</h3>
                            <p>Masing menjadi seorang pelajar di SMK WIKRAMA BOGOR, software engineering</p>
                        </div>
                    </div>

                </div>
                <div class="skills-right">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, eveniet harum perspiciatis numquam eos minus porro reprehenderit iure consectetur praesentium, similique iste obcaecati, officia sunt itaque dolorum ullam maiores. Possimus a magnam voluptas nam animi minus quos reiciendis. Eveniet ex consequuntur recusandae libero dignissimos facilis debitis labore voluptatibus numquam voluptate?
                    </p>
                    <div class="skills-list">
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JS</li>
                            <li>PHP</li>
                            <li>LARAVEL ;)</li>
                        </ul>
    
                        <ul>
                            <li>otw PHYTON</li>
                            <li>otw C++</li>
                            <li>otw C#</li>
                            <li>otw JAWA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layout>