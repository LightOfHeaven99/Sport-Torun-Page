<link href="../../../assets/css/faq.css" rel="stylesheet">
<link href="https://unpkg.com/ionicons@4.4.4/dist/css/ionicons.min.css" rel="stylesheet">

<script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>

<!-- Page Content -->
<!--<div class="faq-bg"> -->
<div class="container">

  <br>

  <h2>Frequently Asked Questions</h2>

  <div class="accordion">
    <div class="accordion-item">
      <a>Gdzie mogę otrzymać informacje związane z rozgrywkami?</a>
      <div class="content">
        <p>Wszelkie informacje znajdziesz na stronie www.tls-torun.pl. Pytania szczegółowe kieruj na maila niuro@tls-torun.pl lub zadzwoń na numer tel. 505 137 735.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Kto może wziąć udział w rozgrywkach Toruńskiej Ligi Siatkówki i ilu zawodników liczy drużyna?</a>
      <div class="content">
        <p>W rozgrywkach TLS może wziąć udział każda osoba dorosła zarówno kobieta jak i mężczyzna. Osoby niepełnoletnie również mogą startwioać w rozgrywkach TLS o ile posiadają psiemną zgodę prawnego opiekuna i ukończyły 15 rok życia.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Jak można zgłosić zespół do Toruńskiej Ligi Siatkówki?</a>
      <div class="content">
        <p>Drużyny zgłaszamy na stronie tls-torun.pl wypełniając odpowiedni formularz w zakładce „Zgłoszenie”.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Jaki jest koszt udziału drużyny w Toruńskiej Ligi Siatkówki i na co zostaną przeznaczone te środki?</a>
      <div class="content">
        <p>Koszt udziału w TLS to 1500zł od drużyny. Pieniądze te zostaną przeznaczone na wynajem hali sportowej, sędziów i sędziów stolikowych, fotoreportera, stworzenie i utrzymywanie strony internetowej, stworzenie i utrzymywanie fanpaga na Facebooku, nagrody drużynowe i indywidualne na koniec sezonu, inne koszta związane z organizacją TLS.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>W jakie dni i w jakich godzinach rozgrywane będą mecze Toruńskiej Ligi Siatkówki?</a>
      <div class="content">
        <p>Rozgrywki TLS zaplanowano wstępnie na poniedziałki i/lub czwartki w godzinach 18-21.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Do kogo się zwrócić w razie problemów technicznych ze stroną internetową?</a>
      <div class="content">
        <p>Proszę zwrócić się do administratora strony za pomocą formularzu kontaktowego.</p>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<script>

const items = document.querySelectorAll(".accordion a");

function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}

items.forEach(item => item.addEventListener('click', toggleAccordion));

</script>
