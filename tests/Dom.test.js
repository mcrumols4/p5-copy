import {mount} from '@vue/test-utils';
import {vi} from 'vitest';
import DehydratedAlipicaSkin from '@/Pages/Skins/AlipicaSkin/DehydratedAlipicaSkin.vue';

vi.mock('@inertiajs/vue3', () => ({
    Head: {
        name: 'Head',
        render: () => null,
    },
    createInertiaApp: vi.fn().mockReturnValue({
        app: {
            component: 'MockComponent',
        },
    }),
}));

it('El component conté el text "Pell alípica deshidratada"', async () => {
    const wrapper = mount(DehydratedAlipicaSkin,  {global: {plugins: []}});
    await wrapper.vm.$nextTick();
    const componentHtml = wrapper.html();
    expect(componentHtml).toContain('Pell alípica deshidratada');
});