<h1>
Dependency Injection Container: How it works
</h1>

<p>
<em>Dependency Injection</em> is the term frequently used in the area of Object Oriented Programming and it is one of the design patterns that one should know deeply for writing and organizing better code. In addition, if somebody has a good understanding of how to handle dependencies in conjunction with a container then it would provide him an extra advantage for learning a framework quickly. As far I remember, I have faced some difficulties as a beginner for understanding a PHP framework without having any idea about how to use a container that handles dependencies. Nevertheless it is not always necessary to use a container for managing objects, specially when you are dealing with a small collection of objects in your application, though practicing it would absolutely be beneficial for producing elegant code time to time.
</p>

<p>
Like some other design patterns, injecting dependencies is not fixed. Apparently there are many ways to do it and the two most common out of them are Constructor Injection and Setter Injection. In this article I am not going to discuss about: what is Dependency Injection? Rather, I would like to focus on the primary construction of a container which takes the responsibility for managing objects from their creation to their configuration. This discussion will be carried on by introducing some basic features of "PHP container" through some simple examples sequentially. Additionally, some of PHPs OOP features are included, such as interfaces and traits, to make the examples more constructive. By the way, I have already written an articles on this topics and one may visit it via this <i><a href="https://medium.com/@annuhuss/some-of-the-phps-object-model-features-interfaces-traits-and-abstract-classes-f98c4509592b">Link</a></i>.
</p>

<p>
As we already know, Dependency Injection is a technique for presenting code in a more stylish and efficient way. Concisely, the introduction of Dependency Injection makes an application more rigorous by avoiding hard coding and give it more flexibility for controlling its objects overall. However, there arise some questions: <i><strong>what is a Dependency Injection Container? how does it serves and why should we use it?</strong></i> We will try to focus on all of these through the upcoming examples.
</p>

<p>
"A Dependency Injection Container is an object that knows how to instantiate and configure objects. And to be able to do its job, it needs to knows about the constructor arguments and the relationships between the objects", by Fabien Potencier written in one of his excellent <i><a href="http://fabien.potencier.org/do-you-need-a-dependency-injection-container.html">posts</a></i> on Dependency Injection.
</p>

<p>
In other words, a Dependency Injection Container is a tool that manages objects from their instantiation to their configuration by the action of on demand dependencies. Moreover, these injected dependencies are the data which are basically categorized as objects and parameters.
</p>

<p>
Although it is not so worthwhile using a Dependency Injection Container to get advantage from Dependency Injection in the following examples, wherein a few different objects are needed with their dependencies for executing each application (each example). But for the sake of simplicity, I am going to introduce Dependency Injection as well as some other exciting features, such as <i>shared instances</i> and PHPs magic <i>__set()</i> and <i>__get()</i> methods into the container through some sequential examples so that, by the end of this article, we will be familiar by the basic structure of Dependency Injection Container and the circumstances: when and why we may use it.
</p>

<p>
My motive to give a primary construction to the Dependency Injection Container is quite straightforward. As we go through the following examples sequentially, a new feature will be added into the Container Class to flourish it gradually:
</p>

<p>
<ul>
<li><i><strong>container.php</strong></i></li>
<li><i><strong>container_2.php</strong></i></li>
<li><i><strong>container_3.php</strong></i></li>
<li><i><strong>container_4.php</strong></i></li>
</ul>
</p>

<p>
To sum up, I want to focus on some points for the examples as follows:
<li>
<i><strong>container_3.php</strong></i> is the file that contains better code for Dependency Injection avoiding all hard-coding and also includes a shared instance feature to furnish the container a bit more.
</li>
<li>
<i><strong>container_4.php</strong></i> exposes two PHP magic methods through the Dependency Injection Container class, providing the Container more stability for performing different kind of action. Additionally, the role of these methods can inevitably be effective when they are properly used in the application.
</li>
</p>

<p>
I have tried to make the examples as simple as purposive. Hopefully, by this article, we now have a good understanding of Dependency Injection, a shared instance, two of the important PHP magic methods __set() and __get() and finally, how to utilize them by a Dependency Injection Container. By the way, an appropriate example for a shared instance, __set() and __get() methods can be reached by this <a href="https://medium.com/@annuhuss/use-of-lambda-anonymous-functions-closures-and-shared-instances-in-conjunction-with-container-58b95b86c1b8"><i>Link</i></a>.
</p>

<p></p>

<p><i>Thanks, yours stars would always be appreciated!</i></p>

<p></p>

<p><i>
A detail illustration of this topic and some of my other articles on different topics can be reached by 
<a href="https://medium.com/@annuhuss/">the medium blog site</a>.
</i></p>
