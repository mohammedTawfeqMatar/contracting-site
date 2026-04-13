@extends('site.layouts.app')

@section('title', 'يمن استيل - اتصل بنا')

@section('styles')
    @vite(['resources/css/contact.css'])
@endsection

@section('content')
    <section id="contact" class="contact section-py">
      <div class="container">
        <div class="sec-head reveal">
          <span class="sec-label">اتصل بنا</span>
          <h2>نحن هنا لمساعدتك</h2>
          <p>أرسل لنا رسالتك وسنتواصل معك في أقرب وقت</p>
        </div>
        <div class="contact-layout">
          <div class="contact-card reveal">
            <h3>معلومات التواصل</h3>
            <p class="cc-sub">نسعد بخدمتك على مدار أيام العمل</p>
            <ul class="ci-list" role="list">
              <li>
                <div class="ci-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div><strong>العنوان</strong><span>صنعاء — شارع القيادة، مقابل جامعة العلوم والتكنولوجيا</span></div>
              </li>
              <li>
                <div class="ci-icon"><i class="fas fa-phone-alt"></i></div>
                <div><strong>الهاتف</strong><span>+967774984145</span><span>+967774984145</span></div>
              </li>
              <li>
                <div class="ci-icon"><i class="fas fa-envelope"></i></div>
                <div><strong>البريد الإلكتروني</strong><span>alselwiabdulsamad@gmail.com</span></div>
              </li>
              <li>
                <div class="ci-icon"><i class="fas fa-clock"></i></div>
                <div><strong>أوقات العمل</strong><span>السبت — الخميس: 8ص — 6م</span></div>
              </li>
            </ul>
            <div class="cc-social" aria-label="تواصل اجتماعي">
              <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>

          <form class="contact-form reveal" id="contactForm" style="--delay:150ms" novalidate>
            @csrf
            <h3>أرسل رسالتك</h3>
            <div class="frow">
              <div class="fg">
                <label for="fullName">الاسم الكامل</label>
                <input id="fullName" name="fullName" type="text" placeholder="ABDULSAMAD ALSELWI " autocomplete="name" required />
              </div>
              <div class="fg">
                <label for="phone">رقم الهاتف</label>
                <input id="phone" name="phone" type="tel" placeholder="+967774984145" autocomplete="tel" />
              </div>
            </div>
            <div class="fg">
              <label for="email">البريد الإلكتروني</label>
              <input id="email" name="email" type="email" placeholder="alselwiabdulsamad@gmail.com" autocomplete="email" required />
            </div>
            <div class="fg">
              <label for="message">رسالتك</label>
              <textarea id="message" name="message" placeholder="أخبرنا عن مشروعك..." rows="5" required></textarea>
            </div>
            <button type="submit" class="btn-submit">
              <span>إرسال الرسالة</span>
              <i class="fas fa-paper-plane" aria-hidden="true"></i>
            </button>
            <p class="form-note"><i class="fas fa-lock" aria-hidden="true"></i> بياناتك محفوظة بأمان تام</p>
          </form>
        </div>
      </div>
    </section>
@endsection