<html>
<body>
<div class="mb-10">
    <h1 class="text-center text-4xl font-bold mb-12">Contact Us</h1>
    <form name="add-subscription-form" id="add-subscription-form" method="post" action="{{url('/subscription')}}"
          class="md:flex justify-center sm:grid sm:grid-cols-1 sm:p-8">
        @csrf
        <div class="md:w-2/5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15762.64213733769!2d38.7797253!3d9.0033502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3b5692e7406de3d!2sBitApps%20Tech!5e0!3m2!1sen!2set!4v1645122085493!5m2!1sen!2set"
                frameborder="0"
                style="border: 0; width: 100%; height: 370px"
                allowfullscreen
                loading="lazy"
            ></iframe>
        </div>
        <div class="md:w-1/2 sm:p-6 md:py-0">
            <div class="flex justify-between">
                <p>Bole Atlas, Addis Ababa, Ethiopia</p>
                <p>info@bitappstech.com</p>
                <p>+251 90 946 5857 | +251 91 099 0147</p>
            </div>
            <div class="flex">
                <input
                    style="outline: none; border-width: 1px;border-style: solid; border-image: linear-gradient(to right,#6D2691,#96256B,#B8244B,#D22332,#E52221,#F02216,#F42213,#F5341A,#F6602B,#F78339,#F79C42,#F8AB48,#F8B04A) 1;"
                    class="mr-2 mt-4 p-1 w-full mb-10" type="text"
                    placeholder="Name"
                    id="name"
                    name="name"
                    required
                >
                <input
                    style="outline: none; border-width: 1px;border-style: solid; border-image: linear-gradient(to right,#6D2691,#96256B,#B8244B,#D22332,#E52221,#F02216,#F42213,#F5341A,#F6602B,#F78339,#F79C42,#F8AB48,#F8B04A) 1;"
                    class="p-1 mt-4 w-full mb-10" type="text"
                    placeholder="Email"
                    id="email"
                    name="email"
                    required
                >
            </div>
            <input
                style="outline: none; border-width: 1px;border-style: solid; border-image: linear-gradient(to right,#6D2691,#96256B,#B8244B,#D22332,#E52221,#F02216,#F42213,#F5341A,#F6602B,#F78339,#F79C42,#F8AB48,#F8B04A) 1;"
                class="p-1 w-full mb-10" type="text"
                placeholder="Subject"
                id="subject"
                name="subject"
                required
            >
            <textarea
                rows="7"
                style="outline: none; border-width: 1px;border-style: solid; border-image: linear-gradient(to right,#6D2691,#96256B,#B8244B,#D22332,#E52221,#F02216,#F42213,#F5341A,#F6602B,#F78339,#F79C42,#F8AB48,#F8B04A) 1;"
                class="pl-1 w-full" type="text"
                placeholder="Some message here :)"
                id="message"
                name="message"
                required
            ></textarea>
            <div class="flex justify-center mt-2">
                <button
                    type="submit"
                    class="text-white rounded-3xl py-1 px-4"
                    style="background: linear-gradient(47.36deg, #682696 5.97%, #6D2691 6.48%, #96256B 11.26%, #B8244B 16.15%, #D22332 21.1%, #E52221 26.17%, #F02216 31.39%, #F42213 37.04%, #F5341A 41.21%, #F6602B 52.42%, #F78339 63.23%, #F79C42 73.41%, #F8AB48 82.7%, #F8B04A 90.29%);">
                    Send Message
                </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
