<script>
  import Router from "./routes/index.svelte";
  import "./main.css";
</script>

<main>
  <div class="italic">This is a test.</div>
  <h1>Academix</h1>
  <Router />
</main>

<style>
  main {
    text-align: center;
    padding: 1em;
    max-width: 240px;
    margin: 0 auto;
  }
</style>
