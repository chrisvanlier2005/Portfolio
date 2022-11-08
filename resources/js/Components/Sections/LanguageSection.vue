<template>
    <List width="2"
          gap="2"
          responsive="true"
          responsive-breakpoint="md"
          responsive-width="1">
        <ListItem>
            <HorizontalStack class="bg-white shadow-md rounded-xl p-5 text-black"
                             gap="10"
                             align="center"
                             responsive="responsive"
                             responsive-breakpoint="lg"
            >
                <Image alt="Laravel Logo"
                       class="w-24 h-auto"
                       src="/img/logo/PHP-logo.png"></Image>
                <VerticalStack justify="center">
                    <h1 class="text-2xl">PHP</h1>
                    <p class="text-sm">I have used PHP for a ton of school projects, and i have also used it for a few personal projects.
                    I love to experiment with it, and i have learned a lot about it.</p>
                </VerticalStack>
            </HorizontalStack>
        </ListItem>
        <ListItem>
            <HorizontalStack class="bg-white shadow-md rounded-xl p-5 text-black"
                             gap="10"
                             align="center"
                             responsive="responsive"
                             responsive-breakpoint="lg">
                <Image alt="Laravel Logo"
                       class="w-24 h-auto rounded-md"
                       src="/img/logo/js-logo.png"></Image>
                <VerticalStack justify="center">
                    <h1 class="text-2xl">Javascript</h1>
                    <p class="text-sm">My first language, in combination with HTML and CSS</p>
                </VerticalStack>
            </HorizontalStack>
        </ListItem>
    </List>
</template>

<script>
export default {
    name: "LanguageSection"
};
</script>

<style scoped>

</style>
