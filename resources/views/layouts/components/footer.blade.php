@include('layouts.components.footer.whos_online')
@include('layouts.components.footer.partners')
@include('layouts.components.footer.website_visitors')
<div class="w-full bg-blue-primary text-white text-sm">
    <div class="container mx-auto py-4">
        <div class="flex w-full flex-col text-center md:flex-row md:w-1/2 md:text-left">
            <div class="flex-1">
                <a href="" class="text-white">Help &amp; Contact Us</a>
            </div>
            <div class="flex-1">
                <a href="" class="text-white">Website Terms</a>
            </div>
            <div class="flex-1">
                <a href="" class="text-white">Cookies &amp; Privacy Policy</a>
            </div>
        </div>
        <div class="flex w-full flex-col text-center md:flex-row md:w-1/2 md:text-left mt-2">
            <div class="flex-1">
                <p>&copy; Copyright @{{ currentYear }} - Fly UK Virutal Airways</p>
            </div>
        </div>
    </div>
</div>
