#ifdef GL_ES
    precision mediump float;
#endif

uniform mat4 camProj;
uniform mat4 camView;
uniform mat4 entity;

uniform bool useView;

attribute vec3 position;
attribute vec2 texCoords;

varying vec2 vTexCoords;

void main()
{
    vTexCoords = texCoords;
    gl_Position = camProj * (useView ? camView : mat4(1.0)) * entity * vec4(position, 1.0);
}