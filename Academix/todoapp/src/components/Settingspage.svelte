<script>
  import { Link } from "svelte-routing";
</script>

<div>
  
  <h1 class="text-3xl font-bold underline">
    We are running tailwind in Svelte!
  </h1>
  <h3>This is About Page.</h3>
  <h4>hehe</h4>
  <Link to="/">Home</Link><br />
  <Link to="blog">Blog</Link>
</div>

<style lang="postcss">
  :global(html) {
    background-color: #d6e4f0;
  }
</style>
