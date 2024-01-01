@extends('layout.app')
@section('content')
 <!-- Start block -->
 <!-- contact form -->

<!-- a lot of the lines are just svg text, actual html is simple 
A sample contact us page form written with tailwind css
Illustration from undraw.co by the amazing Katerina Limpitsouni
-->
<div class="bg-gradient-to-br from-gray-200 via-gray-400 to-pink-400  dark:bg-gray-900 px-8 py-12">
      <div class="text-center w-full">
   
      <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16 mt-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Contact Us </h2>
            <p class="font-light text-gray-500 sm:text-xl text-white lg:text-2xl">Reach out to us and let's start a conversation. We're here to assist you every step of the way.</p>
        </div> 
      
      </div>
      <div
        class="max-w-screen-xl mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-50 text-gray-900 rounded-lg shadow-lg">
        <div class="flex flex-col justify-between">
          <div>
            <h2 class="text-4xl lg:text-5xl font-bold leading-tight">Get in touch</h2>
            <div class="text-gray-700  lg:text-2xl sm:text-xl font-dark mt-8">
            Get a project in mind let's contact us!!
            </div>
          </div>
          <div class="mt-8 text-center">
    <img src="./assets/img/contactloop.gif" alt="Your Image" class="w-full mr-12">
</div>

        </div>
        <div class="">
    <div>
        <span class="uppercase text-sm text-gray-600 font-bold">First Name</span>
        <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
               type="text" placeholder="" required>
    </div>
    <div class="mt-8">
        <span class="uppercase text-sm text-gray-600 font-bold">Last Name</span>
        <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
               type="text" required>
    </div>
    <div class="mt-8">
        <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
        <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
               type="text" required>
    </div>
    <div class="mt-8">
        <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
        <textarea class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                  required></textarea>
    </div>
    <div class="mt-8">
        <a href="{{ ('/contact')}}"
           class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-pink-500 hover:bg-pink-600 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
            Send Message
            <!-- <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
            </path></svg> -->
        </a>
    </div>
</div>

      </div>
    </div>
    <!-- end block -->

    <!-- map -->

    <section class="container-fluid  mt-n12 ">
    <div class="row">
        <div class="col-lg-12 p-0">
            <!-- Google Map Embed -->
            <iframe
                class="w-full h-136"
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.7245431381434!2d73.14561787344553!3d22.32625507966792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8ee3e155555%3A0x1386022b1d132240!2sDevloops%20International!5e0!3m2!1sen!2sus!4v1701242127098!5m2!1sen!2sus"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            <!-- End Google Map Embed -->
        </div>
    </div>
</section>

@endsection