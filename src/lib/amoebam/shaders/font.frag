#ifdef GL_ES
    precision mediump float;
#endif

uniform sampler2D fontTexture;
uniform float alpha;
uniform vec4 color;

varying vec2 vTexCoords;

void main()
{
    vec4 textureColor = texture2D(fontTexture, vTexCoords);
    gl_FragColor = vec4(textureColor.rgb + color.rgb, textureColor.a * color.a * alpha);
}