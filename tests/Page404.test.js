import { beforeAll, describe, expect } from 'vitest';

describe('load page 404', () => {
    let response;

    beforeAll( async () => {
        response = await fetch('http://imatgepersonalmonturiol.cat/cendrassos')
    },30000);

    it('load page 404', async () => {
        expect(response.status).toBe(404);
    });
});