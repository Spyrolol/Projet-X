<script lang="ts">
  import { navigate } from 'svelte-routing';
  const handleClick = () => {
  navigate('/settings');
};
  const name = " Benzo";
  let coffeType = "Hot";
</script>

<div class="index">
  <h1>Hey,{name}</h1>
  <p>Votre type de cafe:{coffeType}</p>
</div>
<button on:click={handleClick}>Go to Result Page</button>
<style>
  h1 {
    color: white;
  }
</style>
