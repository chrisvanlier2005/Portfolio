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
                       src="/img/logo/laravel-logo.png"></Image>
                <VerticalStack justify="center">
                    <h1 class="text-2xl">Laravel</h1>
                    <p class="text-sm">With Laravel, I've built a few projects, including this one. I've also used Laravel for a
                        few
                        projects at school, including TCGHUB</p>
                </VerticalStack>
            </HorizontalStack>
        </ListItem>
        <ListItem>
            <HorizontalStack class="bg-white shadow-md rounded-xl p-5 text-black"
                             gap="10"
                             align="center"
                             responsive="responsive"
                             responsive-breakpoint="lg">

                <Image alt="VueJS logo"
                       class="w-24 h-auto"
                       src="/img/logo/vuejs-logo.png"></Image>
                <VerticalStack justify="center">
                    <h1 class="text-2xl">Vue.JS</h1>
                    <p class="text-sm">I mainly use VueJS as my frontend tool when i need one.
                        I enjoy using it because i keep discovering new things about it.</p>
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
                       src="/img/logo/net-logo.png"></Image>
                <VerticalStack justify="center">
                    <h1 class="text-2xl">.NET (ASP, MAUI)</h1>
                    <p class="text-sm">.NET is very big in whats possible with it, i've used it in order to create: Web Applications, Desktop and Mobile Apps</p>
                </VerticalStack>
            </HorizontalStack>
        </ListItem>
        <!--    placeholder framework    -->
        <ListItem>
            <HorizontalStack class="bg-white shadow-md rounded-xl p-5 text-black"
                             gap="10"
                             align="center"
                             responsive="responsive"
                             responsive-breakpoint="lg">
                <div class="w-28 aspect-square bg-gray-300 rounded-md"></div>
                <VerticalStack justify="center">
                    <h1 class="text-2xl">New stuff</h1>
                    <p class="text-sm">As time progresses i will learn new things, and add them here.</p>
                </VerticalStack>
            </HorizontalStack>
        </ListItem>
    </List>
</template>

<script>
export default {
    name: "FrameworkSection"
};
</script>

<style scoped>

</style>
