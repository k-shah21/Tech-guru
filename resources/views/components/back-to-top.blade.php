<div x-data="{ 
    show: false,
    progress: 100,
    calculateProgress() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const percentage = (scrollTop / height) * 100;
        this.progress = 100 - percentage;
    },
    scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
}" 
x-init="calculateProgress()"
@scroll.window="show = (window.pageYOffset > 500); calculateProgress()"
x-show="show" 
x-cloak
x-transition:enter="transition ease-out duration-300"
x-transition:enter-start="opacity-0 translate-y-10"
x-transition:enter-end="opacity-100 translate-y-0"
x-transition:leave="transition ease-in duration-300"
x-transition:leave-start="opacity-100 translate-y-0"
x-transition:leave-end="opacity-0 translate-y-10"
class="fixed right-10 bottom-10 z-[100] cursor-pointer group flex flex-col items-center gap-4"
@click="scrollToTop">
    
    <div class="[writing-mode:vertical-lr] absolute -top-32  text-[#edc458] font-bold font-marcellus text-sm uppercase transition-all duration-300 group-hover:-translate-y-2">
        Go Back Top
    </div>
    
    <div class="w-[2px] h-10 bg-white/20 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full bg-[#edc458] transition-all duration-100"
             :style="{ height: progress + '%' }"></div>
    </div>

</div>
