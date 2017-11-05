@include('layouts.components.footer.whos_online')
@include('layouts.components.footer.partners')
@include('layouts.components.footer.website_visitors')
<div class="w-full bg-blue-primary text-white text-sm">
    <div class="container mx-auto py-4">
        <div class="flex w-1/2 flex-col sm:flex-col md:flex-row lg:flex-row xl:flex-row">
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
        <div class="flex w-1/2 flex-col sm:flex-col md:flex-row lg:flex-row xl:flex-row mt-2">
            <div class="flex">
                <p>&copy; Copyright @{{ currentYear }} - Fly UK Virutal Airways</p>
            </div>
        </div>
    </div>
</div>
