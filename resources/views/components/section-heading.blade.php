@props(['subtitle', 'align' => 'left'])

<div {{ $attributes->merge(['class' => 'flex flex-col z-20' . ($align === 'center' ? 'items-center text-center' : 'items-start text-start')]) }}>
    @if (!empty($subtitle))
    <p class="text-[#4FA0FF] tracking-wider text-base font-medium flex items-center {{ $align === 'center' ? 'justify-center' : 'justify-start' }} gap-2">
        <span class="w-2 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#79b0f0] rounded-full"></span>
        {{ $subtitle }}
        <span class="w-8 h-[2px] bg-gradient-to-r from-[#4FA0FF] to-[#6daef8] rounded-full"></span>
    </p>
    @endif

    <h2 class="text-[25px] md:text-[40px] font-bold my-6 font-marcellus text-white z-[10] heading"
        x-data="{
            init() {
                const root = this.$el;
                const animationQueue = [];

                const walk = (node) => {
                    if (node.nodeType === 3) {
                        const text = node.textContent;
                        const frag = document.createDocumentFragment();
                        const chars = text.split('');
                        chars.forEach(char => {
                            const span = document.createElement('span');
                            span.textContent = char;
                            span.style.opacity = '0';
                            span.style.transition = 'opacity 0s'; 
                            frag.appendChild(span);
                            animationQueue.push(span);
                        });
                        node.replaceWith(frag);
                    } else if (node.nodeType === 1) { // Element Node
                        if (['IMG', 'BR', 'HR'].includes(node.tagName)) {
                            node.style.opacity = '0';
                            node.style.transition = 'opacity 0s';
                            animationQueue.push(node);
                        } else {
                            // Recursively process children of containers (spans, etc.)
                            Array.from(node.childNodes).forEach(walk);
                        }
                    }
                }

                // Process initial children
                Array.from(root.childNodes).forEach(walk);

                const observer = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting) {
                        let i = 0;
                        const interval = setInterval(() => {
                            if (i >= animationQueue.length) {
                                clearInterval(interval);
                                return;
                            }
                            animationQueue[i].style.opacity = '1';
                            i++;
                        }, 30); // Adjust typing speed here (30ms)
                        observer.disconnect();
                    }
                }, { threshold: 0.1 });
                
                observer.observe(root);
            }
        }">
        {{ $slot }}
    </h2>
</div>

<style>
    .heading{
        line-height: 58px;
    }
</style>