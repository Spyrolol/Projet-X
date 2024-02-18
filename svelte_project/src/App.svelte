<script lang="ts">
  function goToPage2() {
    navigate("/settings");
  }
  const name = " Benzo";
  let coffeType = "Hot";
</script>

<main>
  <h1>Hey,{name}</h1>
  <p>Votre type de cafe:{coffeType}</p>
  <nav>
    <slot>
      <a href="/another-page"> Another Page </a>
      <h1>This is navbar for home</h1>
    </slot>
  </nav>
</main>

<style>
  h1 {
    color: white;
  }
</style>
