<style>
    /* Input Titles */
    .contact__input-title {
        color: #c5c8cd;
        font-family: "Marcellus", serif;
        margin-bottom: 7px;
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        text-align: start
    }

    /* Input Icon */
    .contact__input-icon {
        position: absolute;
        top: 14px;
        right: 16px;
    }

    .contact__input-icon i {
        font-size: 20px;
    }

    .contact__input-box {
        position: relative;
        display: block;
        border-radius: 16px;
    }

    /* Default Border Gradient */
    .contact__input-box:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 16px;
        border: 1px solid transparent;
        background: linear-gradient(90deg, rgba(92, 176, 233, .2), rgba(143, 136, 255, .3)) border-box;
        -webkit-mask-image: linear-gradient(#fff 0, #fff 0), linear-gradient(#fff 0, #fff 0);
        -webkit-mask-clip: padding-box, border-box;
        -webkit-mask-origin: padding-box, border-box;
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        transition: all .5s ease;
        pointer-events: none;
    }

    /* Hover & Focus Gradient */
    .contact__input-box:hover:before,
    .contact__input-box:focus-within:before {
        background: linear-gradient(90deg, #6065d4, #fa5674) border-box;
    }
</style>


<form
    x-data="contactForm()"
    @submit.prevent="submit"
    class="contact__form">
    @csrf

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Full Name --}}
        <div>
            <h4 class="contact__input-title">Full Name</h4>
            <div class="contact__input-box relative text-start">
                <input
                    type="text"
                    name="full_name"
                    @input="clearError('full_name')"
                    value="{{ old('full_name') }}"
                    placeholder="Thomas Alison"
                    class="w-full bg-transparent  text-white rounded-xl px-5 py-4 pr-12 focus:outline-none">
                <span class="contact__input-icon"><i class="ri-user-line"></i></span>
            </div>
            <p x-show="errors.full_name" x-text="errors.full_name?.[0]" class="mt-1 text-sm text-red-400"></p>
        </div>

        {{-- Email --}}
        <div>
            <h4 class="contact__input-title">Email Address</h4>
            <div class="contact__input-box relative">
                <input
                    type="email"
                    name="email"
                    @input="clearError('email')"
                    value="{{ old('email') }}"
                    placeholder="thomas@domain.com"
                    class="w-full bg-transparent  text-white rounded-xl px-5 py-4 pr-12 focus:outline-none">
                <span class="contact__input-icon"><i class="ri-mail-line"></i></span>
            </div>
            <p x-show="errors.email" x-text="errors.email?.[0]" class="mt-1 text-sm text-red-400"></p>
        </div>

        {{-- Phone --}}
        <div>
            <h4 class="contact__input-title">Phone Number</h4>
            <div class="contact__input-box relative text-start">
                <input
                    type="text"
                    name="phone"
                    @input="clearError('phone')"
                    value="{{ old('phone') }}"
                    placeholder="+12 (00) 123 4567 890"
                    class="w-full bg-transparent  text-white rounded-xl px-5 py-4 pr-12 focus:outline-none">
                <span class="contact__input-icon"><i class="ri-phone-line"></i></span>
            </div>
            <p x-show="errors.phone" x-text="errors.phone?.[0]" class="mt-1 text-sm text-red-400"></p>
        </div>

        {{-- Subject --}}
        <div>
            <h4 class="contact__input-title">Subject</h4>
            <div class="contact__input-box relative text-start">
                <select
                    name="subject"
                    @change="clearError('subject')"
                    class="w-full bg-transparent  text-gray-400 rounded-xl px-5 py-4 pr-12 focus:outline-none appearance-none cursor-pointer">
                    <option value="">Select a Service</option>
                    <option @selected(old('subject')=='Web Development' )>Web Development</option>
                    <option @selected(old('subject')=='App Development' )>App Development</option>
                    <option @selected(old('subject')=='UI/UX Design' )>UI/UX Design</option>
                </select>
                <span class="absolute right-4 top-5 text-gray-400 pointer-events-none"><i class="ri-arrow-down-s-line text-xl"></i></span>
            </div>
            <p x-show="errors.subject" x-text="errors.subject?.[0]" class="mt-1 text-sm text-red-400"></p>
        </div>

        {{-- Message --}}
        <div class="md:col-span-2">
            <h4 class="contact__input-title">Inquiry about</h4>
            <div class="contact__input-box relative text-start">
                <textarea
                    name="message"
                    rows="6"
                    @input="clearError('message')"
                    placeholder="Write your message"
                    class="w-full bg-transparent  text-white rounded-xl px-5 py-4 pr-12 focus:outline-none">{{ old('message') }}</textarea>
                <span class="contact__input-icon"><i class="ri-edit-box-line"></i></span>
            </div>
            <p x-show="errors.message" x-text="errors.message?.[0]" class="mt-1 text-sm text-red-400"></p>
        </div>

    </div>

    {{-- Submit Button --}}
    <div class="mt-8 text-left">
        <button type="submit" class="thm-btn">
            Submit Now →
        </button>
    </div>

    {{-- Success Toast --}}
    <div
        x-show="successMessage"
        x-transition
        class="fixed top-5 right-5 p-4 bg-green-500 text-white rounded-lg shadow-lg z-50"
        x-text="successMessage">
    </div>
</form>
</div>

<script>
    function contactForm() {
        return {
            loading: false,
            successMessage: '',
            errors: {},
            clearError(field) {
                if (this.errors[field]) delete this.errors[field];
            },
            async submit() {
                this.loading = true;
                this.errors = {};
                this.successMessage = '';

                const formData = new FormData(this.$el);

                try {
                    const response = await fetch("{{ route('contact.store') }}", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (!response.ok) {
                        this.errors = data.errors || {};
                        return;
                    }

                    this.successMessage = data.message;
                    this.$el.reset();

                } catch (e) {
                    console.error(e);
                } finally {
                    this.loading = false;
                }
            }
        }
    }
</script>